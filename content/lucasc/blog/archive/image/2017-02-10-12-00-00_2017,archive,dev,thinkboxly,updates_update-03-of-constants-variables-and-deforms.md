<!--t Update 03 - Of Constants, Variables, and Deformities t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-03-of-constants-variables-and-deforms/update-banner-1024x512.jpg image-->
  
Hello, world! It's that time again—two weeks have passed, and now it's time for another update! For VNgen, the past two weeks have been all about polishing up the foundations so that work can finally begin on adding new elements to the system. Sound boring? Well, you might just be surprised.  
  
[![](/content/images/update-03-of-constants-variables-and-deforms/vngen-textboxes-1024x576.jpg)](/content/images/update-03-of-constants-variables-and-deforms/vngen-textboxes-1024x576.jpg)  
  

### Around the Engine in 80 Ways

So, a bit of context: as opposed to Edge VN, which generated the majority of its properties in real time (i.e. in CPU), VNgen relies heavily on data structures in memory (i.e. in RAM).  
  
For the end user this is particularly significant because it removes the line limit imposed on Edge VN—no more do you have to worry about bogging down the CPU with too many strings at once. You could even run an entire visual novel in a single object.  
  
For me as the developer, however, it means the added challenge of memory management, which requires a lot of planning and organization. (And when changes are made, lots and lots of intricate, manual adjustments. Ouch.) When I first started work on VNgen, I predicted I'd need roughly 32 values stored in memory for each engine element active on-screen.  
  
That number has since jumped to 80. 
  
As development has progressed, I've discovered more and more properties that can be exposed to the end user for modification. That accounts for around half of the 80 base values all elements will hold in memory, meaning end users will get roughly 40 properties to customize—potentially more, depending on the element. In fact, it's progressed to the point where VNgen could stand as a powerful sequenced animation system for games that aren't visual novels at all!  
  

### What Stays in Motion

Which brings us to where I've been the past two weeks: animations. With this complete, all fundamental engine functions are now in place. Now, that doesn't mean VNgen is fully functional as a visual novel engine just yet, but it does mean that development will get much faster and more interesting from here on out.  
  
Last time, I gave a little sneak-peek at animations with a screenshot of a rewritten animation script. Well, it looks a bit different now yet again:  
  
[![](/content/images/update-03-of-constants-variables-and-deforms/vngen-anim-new.png)](/content/images/update-03-of-constants-variables-and-deforms/vngen-anim-new.png)  
  
The syntax of course is mostly the same, but you'll notice the addition of some new variables and a small, but significant change in terminology: what were called "effects" in Edge VN are now "animations" in VNgen. Actually, there are now three types of animation, each of which serves different functions and can be customized in different ways:  
  
First up is **transitions**, of which there are now 10: fade, scale, slide up/down/left/right, and wipe up/down/left/right. These built-in animations play when an element is created or destroyed and can be run in any duration and customized with 30 ease modes.  
  
Second is **transforms**, which come in two forms: modifications, and animations.  
  
Modifications apply permanent changes to the base values of the element being modified and are considered actions, meaning the engine will pause until they are complete.  
  
Animations, on the other hand, are scripted series of modifications which play in the background and either loop until stopped or reset to their default values when complete.  
  
The third and newest form of animations, **deformations**, are the spiritual successor to dynamic character animations in Edge VN, only now they can be applied to all elements. Deformations are written using a similar syntax to animations, and provide eight points of manipulation which can be used to produce some...interesting results.  
  

<iframe src="https://gfycat.com/ifr/SizzlingImpracticalCivet" frameborder="0" scrolling="no" width="640" height="360" allowfullscreen></iframe>

  
  
More practically speaking, deformations can be used for things like character breathing animations, under water or shimmering heat effects, or just adding some extra flair to your UI.  
  
All told, these standardized animation systems provide over 50 animations and modes out of the box, and can be combined and configured for practically infinitely more.  
  
The one trade-off is that the new systems are incompatible with sprite offsets, meaning all elements are forced to align at the top left corner. In theory, it would be possible to add support for this by manually adding the offset values and multiplying them by scale and sine/cosine, however this would result in additional performance cost and convolute something as simple as x/y coordinates for little benefit. It's still an option though, so if sprite offsets are important to you please make your voice heard.  
  
Personally, I feel the trade-off is worth it. In addition to greater animation support, sprites are now capable of four-color gradient blending, which can be extremely useful for matching character graphics to the mood of the scene, dynamic day/night cycles, and so forth.  
  
And if all this sounds like a lot to manage, fear not: VNgen now has its own set of constants, so no longer do you have to refer to documentation to know what integers to input for which animations, eases, and scaling modes! All such shared properties now have names and syntax guides, meaning all available options can be browsed right within GameMaker's code editor.  
  
[![](/content/images/update-03-of-constants-variables-and-deforms/vngen-enum.png)](/content/images/update-03-of-constants-variables-and-deforms/vngen-enum.png)  
  

### One More Thing...

And of course, this is Shaftworks VNgen, with Shaft being the name of the startup I am creating to produce both Shaftworks and original products made with it. Over the past month or so a lot of work has gone into developing a website for Shaft, which is eventually where all documentation will be located for both Shaftworks and Edge Engine. Unfortunately, it's taking a bit longer than I had hoped to get everything in place, and now my web host is undergoing a server migration that has set things back even further. An annoyance to be sure, but I promise the wait will be worth it.  
  
A website for Shaft is just the beginning. What's really exciting is the content that will be there. I have some big surprises in the works that I can't wait to share with the world, but I'll take whatever time I need to so that everything is fully prepared before being unveiled.  
  
All in all, a productive fortnight. (Whew!) And as always, there's still much more to come. Thanks again for reading, and stay tuned for next time!
