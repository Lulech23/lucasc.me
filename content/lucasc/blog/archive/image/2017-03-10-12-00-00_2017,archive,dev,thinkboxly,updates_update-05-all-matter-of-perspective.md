<!--t Update 05 - All a Matter of Perspective t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-05-all-matter-of-perspective/update-banner-1024x512.jpg image-->
  
Following last post's flurry of updates, VNgen development has hit a more technical stage over the past two weeks. While no less exciting for the long term, in the meantime it means making design decisions consumes almost as much time as actually programming. But as you'll see, the slower change of pace is paying off, 'cuz VNgen is about to take on a whole new dimension.  
  

### Don't sweat the small stuff

But first, a few words on the smaller tweaks and additions.  
  
In keeping with last post's theme on adding new entity types to the mix, over the past two weeks emotes were added as well. These are one-time animations that play and then self-destruct, layered between characters and foregrounds. Since visual novels typically rely on only a few different character states, having a secondary means of expressing emotion can go a long ways towards selling the mood of the scene.  
  

<iframe src="https://gfycat.com/ifr/MerryThriftyEyas" frameborder="0" scrolling="no" width="640" height="360" allowfullscreen></iframe>

  
  
Like other VNgen elements, emotes aren't fixed to this type of usage, either. They can also be very useful for other animated effects, such as explosions or lightning strikes—whatever you can imagine, really.  
  
And speaking of effects, a new method of modifying elements was added to VNgen, dubbed "modify\_direct" which was primarily designed to make other forms of sprite-based effects possible as well. With direct modifications, basic elements like scenes and characters can be repositioned and rotated outside the context of VNgen event code. This solves the one major shortcoming of script-based animations and modifications by allowing continuous motion through the use of variables.  
  
For example, say you have a foreground with a tiled rain texture that you want to have pouring down over your scene. With other modifications, the texture would have to reset its position in order to loop the animation, causing the rain to temporarily go up before coming back down again. But with direct modifications, all you need is to set the Y offset to increase by a few pixels per frame, and voila, you have incessant pouring rain.  
  
Not all elements and values can be modified directly, but this is by design. For those that might need it, direct modifications are just another tool in the belt of VNgen, making it a true animation powerhouse.  
  

### Looking back...and all around

Next, in the interest of further removing design limitations, I revisited the backlog to add a pair of optional values for customizing text margins. This allows users to set the percentage of the screen that should be treated as empty space around backlog text both vertically and horizontally, ensuring that no one's text gets cut off.  
  
[![](/content/images/update-05-all-matter-of-perspective/vngen-margins-1024x576.png)](/content/images/update-05-all-matter-of-perspective/vngen-margins-1024x576.png)  
  
In my mind this is not an ideal solution, but the potential for text cutoff is unavoidable with the style of backlog used by Edge VN and now VNgen. Thus far, my backlogs have always scrolled by entry, snapping to the top-left corner of the highlighted text. While this isn't a bad system in and of itself, for NVL-style visual novels or scenarios where multiple strings are logged at once, it is possible to have text that exceeds the height of the display. This is a scenario that very few users are likely to run into, but it's still a weakness I would like to eliminate altogether. In the long term, this probably means adding support for linear backlogs with boring ol' scrollbars. But for now, enjoy the extra customizations!  
  
Which leaves us with the major feature update of the week: perspective. While this feature is far from complete, the groundwork has been laid and is shaping up to be one of the strongest advantages VNgen will have over other visual novel engines. While Edge VN featured support for basic parallax based on a certain scene, VNgen has perspective built into the engine itself, with each element layer functioning as a parallax layer of its own. The result is visual novels with a sense of depth, controlled by a global 'camera' which can be positioned, zoomed, and rotated with a single command.  
  

<iframe src="https://gfycat.com/ifr/BruisedNauticalAmericangoldfinch" frameborder="0" scrolling="no" width="640" height="360" allowfullscreen></iframe>

  
  
While simple in principle, the math behind this feature is actually rather complex, and has required multiple prototypes to identify the best and most efficient way to handle perspective operations. At this stage I've settled on a particular solution and I'm confident it is the right choice, but much work still remains. The real trick is pulling off rotation, which requires a bit of trigonometry to keep everything in place, but that's not to imply the rest is simple either. Just achieving a parallax effect is one thing, but ensuring that it functions in a desirable way is quite another design challenge.  
  
The goal is for all perspective zoom and rotation to be centered on the current position, and for position to function on scenes larger than the native screen size. This would truly give the feel of operating a camera—and without relying on GameMaker's built-in view/camera system. The reasons for this are multiple, from greater compatibility between GMS1 and 2 to allowing VNgen to be drawn to both the application surface and the GUI as desired. Plus, relying on views would also cause text elements to zoom and rotate when they should logically remain in place instead. By keeping VNgen self-contained, the doors remain open to all sorts of other design advantages. The trick is just getting there.  
  
Expect to see much more of this and other features as VNgen progresses! Thanks as always for reading, and stay tuned for next time!
