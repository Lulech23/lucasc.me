<!--t Update 04 - Characters, Scenes, Animations, Oh My! t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-04-characters-scenes-animations/update-banner-1-1024x512.jpg image-->
  
Hello again, world! In [my last update](http://lucasc.me/post/update-03-of-constants-variables-and-deforms), I covered the final pieces of the foundation for Shaftworks VNgen, which I aim to make one of the most advanced and easy to use visual novel engines ever. I said that with the core components in place, development would pick up quickly for the rest of the engine. And this weekend, I'm happy to report that's exactly the case. So strap on your seatbelts, because we've got quite the haul of new features to go over!  
  

### Around the engine in...well, a lot of ways

First off, I'd like to take a moment to highlight a few core changes that were made after the last post went out. At the time, I stated that each VNgen entity would come with 80 built-in values that largely could be customized by the end user. But in fact, when all was said and done, that figure increased even more to 95. 
  
Ok, so it's a big number. But what does that mean, exactly? Well, to put it simply, whether you're talking a textbox, a character, a background, or pretty much anything else, if it's a part of VNgen, there's a LOT of ways to customize it. Everything from sprites to coordinates to color gradients to scale and rotational transforms to animations to mesh deformations—it's all built-in from the ground up and is one of the cornerstones of everything that will come after. It's important to me that VNgen not only do a lot of the work for you, but expose every key value possible for the end user to dictate _how_ it works. To that end, certain elements will offer even more than the base 95 values, crossing over into triple-digit territory. Initially, I was resistant to store this much data in memory for each entity, but in practice I was pleased to find that the RAM footprint is extremely negligible. Visual novels are known for not being the most demanding programs to run, and yet even smartphones these days are equipped with several gigabytes of RAM. Why not use it?  
_(\*VNgen will not require gigabytes of RAM)_  
  
[![](/content/images/update-04-characters-scenes-animations/vngen-new-enum.png)](/content/images/update-04-characters-scenes-animations/vngen-new-enum.png)  
  
In addition, to make things more manageable, I'm constantly looking for ways to simplify the way these customizations are applied. Last time, I provided a sneak peek at constants for transitions, ease modes, and so forth, and in the past two weeks I've rewritten these constants multiple times to make sure they're the easiest and most memorable values possible. This means that instead of inputting an integer—say, 30—to set an animation to use the 'bounce out' ease mode, you can simply input ease.ease\_bounce\_out. What's more, with these values being constants, I can easily change the underlying values without having to rewrite any end-user script code.  
  
In the same vein, I've also decided to merge the animation and deformation scripts for all entities into a single set which can be applied to any of them. Not only does this save time typing out commands for everyone, but also means that new entities can be made fully animation compatible almost instantly as they are developed. Pretty nifty!  
  

## And now, on to the new stuff

Essential stuff, to be sure, but not the most earth-shattering considering you've already seen it. And trust me, much more has been in progress than minutae like that.  
  

### Multi-language support

For starters, one of the most common features I got asked about with Edge VN was how to use multiple languages. Now, Edge VN supported multiple languages by default through the use of some custom 'if' statements, but because the process wasn't clear to many users I've decided to facilitate multi-language support from the ground up in VNgen.  
  
There's not a lot to show for it yet since text and audio won't be implemented until later in development, but the important thing is that the foundation is laid, and I can tell you right now that creating projects in multiple languages will be as easy as running a single line of code to set the current language and then adding a single argument to your text and audio functions to specify which language they belong to. There's even a dedicated function to return the current language so that custom actions can be made, like playing different video cutscenes. And yes, text and audio languages can be set separately to please all your fans. Look forward to more on this when the time comes in the future. In the meantime, if you're a developer interested in supporting multiple languages in your upcoming projects, please [take a look at my tutorial on importing non-latin fonts into GameMaker Studio](https://docs.xgasoft.com)!  
  

### Say hello to scenes and characters!

Next, we have our first two entities besides textboxes join the VNgen family!  
  

<iframe src="https://gfycat.com/ifr/UnripeResponsibleJumpingbean" frameborder="0" scrolling="no" width="640" height="360" allowfullscreen></iframe>

  
  
With scenes and characters in place, things are definitely shaping up to look much more like an actual visual novel. And what's more, both scenes and characters each have a handful of their own custom features and functions on top of the base 95 that come by default.  
  
As I've mentioned before, VNgen uses a series of self-contained 'layers' each with their own custom depth sorting. For most entities this works out just fine, but scenes are an exception. Most of the time, you'll probably want to have a background—so far so good—but what happens when you want to fade your visual novel in and out, or apply a colored overlay for fog or just to set the mood? In this case you need a _foreground_ instead, something to appear on top of characters and the background itself, and so VNgen uses two separate layers for scenes which can both be accessed through a single set of scripts (hence the term _scenes_ as opposed to just backgrounds or foregrounds). Also, just like in Edge VN, scenes can be tiled for endless repetition, which is great for creating motion effects like rain or passing scenery. It's much less complicated in practice than it is to explain it, so just take my word for it when I say it's quite handy. Exhibit A of VNgen doing the work for you, while you sit back and tell it whether to draw your scene behind characters or on top and all that.  
  
And speaking of which, one major feature that set Edge VN apart from other engines was its dynamic character system—a built-in means of applying real-time mesh animation which has now been rewritten and redefined as 'deformations' in VNgen. Well, now that characters have been implemented in VNgen as well, it's time they got their best feature back. But actually, it was already there to begin with.  
  
With VNgen characters, there's no distinction between dynamic and static characters anymore. Deformations can be applied and removed at will, and there's no need to worry about managing face coordinates and rotation separately from the body being deformed. Everything is now drawn to a single surface and that surface modified instead. The result is quite powerful, and really brings characters to life in a big way.  
  
There's still some work to do on characters due to a few functions crossing over with text and audio, but the groundwork has been laid. Look forward to other features like multiple facial expression states and speaker-based highlighting in the weeks to come.  
  

### What was that about an announcement?

Lastly, you may recall that I teased before about another project that has been in the works for quite some time. While I had hoped to reveal it by now, as a result of balancing different workloads the wait will have to continue just a bit longer.  
  
[![](/content/images/update-04-characters-scenes-animations/shaft-coming-soon-1024x559.png)](/content/images/update-04-characters-scenes-animations/shaft-coming-soon-1024x559.png)  
  
After hitting a bit of a rough spot, work on Shaft as a company and a website is coming along smoothly once again. I'm very anxious to get everything set up and made public, and while there's still a lot of work to be done, the light is at the end of the tunnel. Or rather, the beginning. 2017 is still just getting started, and what a whirlwind of a year it's shaping up to be! Thanks as always for reading and being a part of the journey!
