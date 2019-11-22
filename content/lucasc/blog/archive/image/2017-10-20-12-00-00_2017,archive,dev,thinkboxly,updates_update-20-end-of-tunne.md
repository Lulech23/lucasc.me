<!--t Update 20 - The End of the Tunnel t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-20-end-of-tunne/update-banner-1-1024x512.jpg image-->
  
You know the light at the end of the tunnel? Well, no more looking for it, because it's right up ahead.  
  
I'll be honest: I had hoped this devblog would the one where I announce the early access release of VNgen. Well, that's not going to happen today, but it will soon—_very_ soon—and I can assure you my time is being well spent until that day arrives. Indeed, the work I'm doing today is critical in shaping VNgen's future—literally.  
  

## So... what's the big hold up?

Admittedly, part of it is plain old code OCD (a luxury of being a solo developer without a publisher breathing down my neck), but there's much better reasons to hold off on releasing VNgen in its current state as well.  
  
[![](/content/images/update-20-end-of-tunne/responsibility12alternate.png)](/content/images/update-20-end-of-tunne/http://hyperboleandahalf.blogspot.com/2010/06/this-is-why-ill-never-be-adult.html)  
  
Simply put, VNgen was designed to a set of standards, and over time gradually became de-standardized as more and more features were added. It's never been a complete mess, but even a little chaos is tough to reign in on a project that's still in flux. And as any programmer knows, [premature optimization is the root of all evil](https://en.m.wikiquote.org/wiki/Donald_Knuth) (ok, so maybe I'm a little guilty of this one too).  
  
The bottom line is, VNgen is built on a slightly complex series of data structures in memory, where each specific value has its own address—and up until now, different on-screen elements might not be using the same addresses for the same values. Furthermore, the use of plain addresses led to a problem of "magic numbers," or values with no obvious meaning. I've even mentioned in the past what a pain it can be to re-address values when it becomes necessary to add in new ones to an existing data structure.  
  
To an extent, this scenario couldn't be preemptively avoided. At least, not without some superhuman foresight into each and every value I would need (there are hundreds) for each and every moving part of the engine (there are dozens). This is also the sort of thing that doesn't affect engine functionality, i.e. it's not a bug, and therefore up until now there's been much better things to focus my energy on.  
  
And yet, it's still a flaw worth fixing. Therefore, over the past week I've painstakingly re-addressed all values so that common properties use the same addresses in all data structures, which then allowed me to assign variables to each address. The end result is code that's slightly longer, but infinitely more readable and flexible. It took many hours to search and replace so many addresses, but now that the job's done I can arrange and rearrange things again in minutes if need be—seconds, even.  
  

## So... what's the big deal?

It might seem a little sad that for all that work, I knew I'd done my job right when I fired up VNgen and _nothing had changed._ It's true, these sort of code enhancements don't have any tangible impact for the end user, but take my word for it when I say it was well worth the effort. The more compact and optimized VNgen is, the easier it will be to use, and more importantly, maintain and add on to.  
  
And _that much_ is tangible. In the past two weeks, two major additions have been made to VNgen that will completely change the way users interact with it for the better.  
  
First, **style inheritance**. Oftentimes, visual novel creators like to assign different colors to different characters' dialog to make it clearer who's doing the talking. But writing out style changes for every line in addition to dialog is cumbersome. Clearly, automation is the way to go, but getting there isn't as simple as you might think. Edge VN tackled this challenge by running a script that checked every new string and applied the desired colors for a specific character, but not only was this easily overridden and a bit inefficient, the same approach simply isn't possible in VNgen. Each style adjustment is contained in an event which inherently can't communicate with other events (that's what events are _for_).  
  
Instead, a much more intelligent system was needed. Each time new color or font information is set in text or label functions, VNgen automatically records these styles for whatever character they're being assigned to. From then on, the user can simply write "inherit" in place of colors and fonts to have the recorded style restored. This information persists throughout the entire game, so once you've defined colors for a certain character once, you never have to do so again. It's a very handy system, and now that it's in place (and standardized!) it's possible other elements could utilize it in the future as well.  
  
The second big addition is **simple scripts**. Or rather, extended scripts. It's sort of a glass half full/half empty sort of thing. See, up until now I've been developing and working on functions that expose as many parameters to the user as possible for maximum customization. But while customization is cool, it gets a little annoying when **everything** wants you to customize it **all the time**. Want to change a line of text? Ok, set new origin points, scale, rotation, and colors while you're at it too! Need a new background? What level of transparency? And what ease mode should that transition have, while you're at it?  
  
If those kinds of things seem unrelated, it's because in many cases they are. Having them as part of the engine is an incredibly powerful asset, but like a swiss army knife, you probably don't want all your tools out at once most of the time.  
  
[![](/content/images/update-20-end-of-tunne/2017-10-20-1024x445.png)](/content/images/update-20-end-of-tunne/2017-10-20-1024x445.png)  
_Seen above: both scripts create a scene with similar properties, but one is much shorter than the other_  
Enter simple scripts. Or extended scripts. Whatever. The point is, what previously were standard functions have now been renamed and repackaged as extended scripts—still accessible, but tucked neatly away—while new, simplified versions now take their place. These simple scripts demand only the basics, making VNgen easier to use and your code cleaner and more readable. You can still use the extended versions to get down to the nitty-gritty, but when you don't need to, you no longer have to, and that's a huge time saver.  
  

## So... when's the big day?

Soon.™  
  
VNgen is fast reaching a point where I'm confident nothing major is going to change that could break existing projects built on older versions of the engine. I also want to make sure that the first release is solid enough it doesn't _need_ any major updates to work or feel complete. That's not to say development will stop once it's out in the wild—far from it—but my priority is to get things done _right_, not necessarily fast.  
  
All told, the goal is still to hit early access in October. While this may be the last regularly-scheduled devblog for the month, you can be sure I'll post updates everywhere the second VNgen is live. Until then, thanks for reading, and thanks for your patience and support!  
  
With that, I leave you with this week's Yugure no Kagami status report:  
  

## Yugure no Kagami Status Report

[What is Yugure no Kagami? Click here to learn more!](http://www.ynkgame.com/)table span { background-color: #06F; color: #FFF; padding: 5px 10px; display: inline-block; }  

**Script:**

100%

**Artwork:**

1%

**Music:**

100%

**Programming:**

60%

**Voice:**

0%
