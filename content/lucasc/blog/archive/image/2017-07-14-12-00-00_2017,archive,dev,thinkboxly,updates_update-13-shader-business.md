<!--t Update 13 - Shader Business t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-13-shader-business/update-banner-1024x512.jpg image-->
  
It has now been four weeks since text was first introduced in VNgen, and two weeks since the debut of X1, the site that will serve as the home for documentation for all my work, moving forward. [That site is now live, by the way](https://xga.one/), and includes an [official issue tracker](https://xga.one/tracker/) to publicly manage bug reports and feature requests.  
  
Needless to say, it's been a productive month all around. But as I said before, more often than not it's baby steps as opposed to huge leaps now that so much of the groundwork has been laid on my current projects. As a result, this weekend we have the opportunity to take a bit closer look than usual at what's happening in VNgen. Find out more after the jump.  
  
As I've mentioned in the past, VNgen operates on a set of standardized functions for all major elements. These include things like:  
  

- vngen\_thing\_create
- vngen\_thing\_destroy
- vngen\_thing\_modify
- vngen\_thing\_replace
- vngen\_thing\_animate
- vngen\_thing\_deform

  
Fitting text into this scheme proved far more difficult than other elements due to how uniquely it works, but at last it's all there. And it makes a surprising amount of sense, given that this formula was established long before it was decided how text would work in VNgen. "Create" creates a new text element, "modify" applies color, shadow, and outline stylization to it, and "replace" creates a new string while maintaining said stylization. Much more can be done to customize the output of course, and there's more to come in the form of text markup, but that's the basic workflow. If you recall, this is exactly the process you saw in action last week:  
  

<iframe src="https://gfycat.com/ifr/DeafeningPastelApisdorsatalaboriosa" frameborder="0" scrolling="no" allowfullscreen width="640" height="360"></iframe>

  
  
Speaking of markup, however, while there's still much work ahead to add support for things like bold and italics, the groundwork has already been laid. Very little of VNgen's text process follows standard GameMaker Studio conventions, and that means certain features like linebreaks are, well, broken. And re-implementing them isn't as trivial as it sounds.  
  

## If it ain't broke, fix it

Typically, a text application will loop through the characters it has to display on-screen until it hits its horizontal limit, then backs up, creates a new line, and displays the whole word on the new line instead of splitting it up. While this might work fine in C languages and the like, GML is much less friendly to this approach. So instead, I took the opposite angle and built in automatic linebreaking that estimates when text is _close_ to needing wrapped, then begins checking each time there's a space to see if the next word would be too long to fit on the current line. If so, a new line is created and the whole process starts over. It's more efficient than it sounds, and is certainly better than the alternative.  
  
But automatic linebreaking and line wrapping is only half of the problem. What if you want to trigger a linebreak yourself? In GameMaker Studio 1, this can usually be done by inserting a # in your string. In version 2, this was changed to the much more preferable "n", a convention shared by pretty much every other text editor ever. For this reason, I decided to go with "n" for creating a new line regardless of which version of GameMaker you're using. In a small way, you can even think of this as porting a GMS2 function to GMS1, since this will remain constant, whichever version you are using. Pretty neat!  
  
Another major challenge with text was the typewriter effect. As mentioned last time, it's not good enough for a typewriter effect to simply increase the number of characters being drawn every frame. It must also synchronize to varying framerates and compensate for lag. And in VNgen's case, I also wanted to unify the effect speed with other effect speed values, and that meant using a value of characters per _second_ rather than per frame. It's also important that the engine be able to redraw any characters necessary to apply color and styling modifications. Explaining how this all works is beyond the scope of this post, but suffice it to say it took several tries to get it completely right.  
  

## Spoken to when speaking

In any case, with basic text functionality out of the way, I was finally able to lay down one other piece of the puzzle that's been missing for a long time: character speaking and highlight animations. Both of these features are dependent on text to work, and mark the first time two modular VNgen elements have been connected to each other—without sacrificing modularity. You can have text without characters and characters without text and the engine will be perfectly happy with that. But when you have both, character faces will now animate when speaking and the character as a whole will optionally brighten for further focus on the speaker. Audio can also be used to trigger facial animations, if voiceover is present, so technically we're looking at a three-way junction here, not just two.  
  

<iframe src="https://gfycat.com/ifr/SpitefulSpryIbisbill" frameborder="0" scrolling="no" width="640" height="360" allowfullscreen></iframe>

  
  

## Square pegs...

In fact, it's adding intersections and special features like these to a highly standardized system that poses the biggest development challenge right now. For many reasons, it's vitally important that specialized code be integrated with standardized code in a way that doesn't upset the flow of the engine (or at least, as little as possible), and adds as little performance overhead as possible. In laymen's terms, \*how\* these features work is even more important than \*that\* they work, requiring complex solutions to simple problems.  
  
For example, characters already support color blending in modifications and animations, plus attachments get their own individual color blending operations as well. This made fading the character in and out for a highlight effect much more challenging than in Edge VN.  
  
Initially, I was presented with two choices: either perform complex mathematical calculations to blend all the existing color values with a fade value, or draw the final image twice with one being blended to solid black and partial alpha. Both options would have been messy and costly to performance.  
  

## ...Square holes

So, I opted for neither. Instead, I began seeking ways to use post-processing to "pre-fade" the character and all attachments before performing the final color blending operation on top. This broke into shader territory for the first time in VNgen's development. At first, I wrote a simple program in GLSL to handle the fade operation, since shaders run directly on the GPU and its hundreds of parallelized processor cores. But while the performance of shaders is impressive, GLSL operates a bit differently than GML. Although the shader worked, it sourced its RGB and alpha values from the texture in memory, not the color-blended surface, meaning colors were missing and the problem ultimately remained unresolved. Wasted effort? Not quite. It's long been planned to incorporate shader support into VNgen, and while that day hasn't quite come yet, it's a proof of concept that such a feature could be implemented relatively easily. Perhaps one day there will be a "vngen\_thing\_shader" script just like there are scripts for modifying more basic aspects of engine elements!  
  
However, it so happens that GameMaker has a handful of shader-like operations built into it, and in this case those won the day. After running head-first into the limitations of using shaders for the job of character highlighting, it occurred to me that I could do much the same thing in GML with a simple transparent rectangle. Now, you may be surprised to learn that drawing a transparent rectangle is actually a rather slow operation in GameMaker, so instead of literally drawing one every frame, I created a tiny 32x32 transparent black surface which is generated once, and then the surface itself is drawn stretched over the character thereafter. From here, all it takes is a little blend mode operation so that the rectangle doesn't show up on any transparent parts of the character sprite, and voila! Characters highlight and fade out and all other color blending operations are in tact. Easy, right?  
  
As a matter of fact, from a programming standpoint it is, plus it involves the least amount of performance overhead possible. Keeping that level of optimization is the hard part.  
  
And it's just getting started. VNgen is inching closer and closer to the finish line now, with only a couple major features left to be implemented and a lot of little ones to really polish things up. Once all that's done, it'll just be a matter of profiling performance and eliminating every unoptimized bit of code possible.  
  
Anyway, I hope you enjoyed this more in-depth look under the hood of what's going into VNgen! Thanks for being part of the journey so far, and stay tuned for next time!
