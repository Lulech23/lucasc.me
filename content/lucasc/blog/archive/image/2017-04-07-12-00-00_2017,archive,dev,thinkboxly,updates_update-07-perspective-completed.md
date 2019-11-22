<!--t Update 07 - Perspective Completed t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-07-perspective-completed/update-banner-1024x512.jpg image-->
  
It has now been four weeks since I first introduced perspective into VNgen—a feature carried over from Edge VN that never really worked quite like I had hoped, and for one crucial reason: it was tied to a specific engine element, backgrounds. While this made sense at the time based on the way Edge VN was written, for VNgen I didn't want to merely tack on perspective as an afterthought. As a result, the time gone into it has been lengthy and challenging, but now at last one of the engine's most complex features is complete.  
  

## A Matter of Perspective

Ironically (or perhaps, appropriately) enough, the biggest difficulty was simply figuring out the best way to _think_ about perspective in general. All coordinates inherently have a point of reference on which they are based, but with perspective not being tied to any particular element, what reference point _was_ there? As it turned out, the answer was right in front of me all along: my computer screen. The center of it, to be exact.  
  
Thinking of the screen itself as a camera viewfinder, the concept of perspective in a visual novel engine becomes much clearer. Everything moves, offsets, zooms, and rotates based on that center point. However, for normal entities, coordinates are not based on the center of the screen, but the top left corner. Or rather, not the screen, but whatever point the user defines. VNgen operates on a global coordinate offset which can be assigned to anything the user desires, including GameMaker's own view system. Plus, while perspective is active, all elements must also maintain their own individual properties for position, scale, and rotation. Sounding tricky yet?  
  
As a result, adding perspective proved to be much more involved than simply calculating a few values and tacking them on top of everything else. Each element had to be reworked so that position, scale, and rotation are calculated completely differently to factor in perspective from the ground up.  
  
The good news? Now that it's done, it's dead simple to use, and 'just works'™ exactly like you'd imagine. Oh, and did I mention it also shares scripted animation support with other entities?  
  
Unfortunately, due to other changes being made to the engine it's not currently in a runnable state, so I can't show off screenshots and Gfycats this weekend. But trust me when I say that perspective is finally everything it should have been from the start, and is a feature that currently no other consumer visual novel engine can compete with. There'll be lots to see of this and more in the future, so hang tight if you're curious how it turned out!  
  

## Looking Ahead

But speaking of VNgen being under the knife, with such fundamental changes to code come new opportunities. For example: previously, mesh deforms with rotation would only rotate the mesh itself, not the deformation animation. With perspective code in place, this limitation became a cinch to correct as almost all the necessary calculations were already being done.  
  
More importantly, perspective code also laid the foundation for another feature I've mentioned before: sprite offsets. While this may sound trivial, it actually isn't. Sprite offsets are not supported by GameMaker when using VNgen's primary drawing method, and after some experimentation I believe I've determined why: there's actually a bug in the drawing function itself causing any sprites with an offset to be cut off! This bug can be worked around, but doing so requires storing the sprite offset in my own data structures and then resetting the actual sprite offset to 0 so it doesn't throw off the drawing process. Then, I can add the offset back in while performing my own position, scale, and rotation. Easy, right?  
  
Well, it might be, if not for the fact that my memory map was supposed to be locked a long time ago. Having built upon it for the last few months, adding two more entries now requires reworking over 500 entries..._manually_. Ouch. While this might sound like more work than it is worth, I'm convinced that sprite offsets are such a fundamental property of game design that they should be usable in VNgen. GameMaker users expect it, and for good reason: not having a sprite offset complicates every basic transform operation. Rotating from the top left corner of a sprite is rarely useful, and calculating the correct position offset to rotate around other points is a hassle to do manually. Scaling poses a similar problem.  
  
In short, it's much better to put this task on the engine than the end user. As such, this is the first feature I will be focusing on for the next two weeks. After that I will be taking a look at other tweaks and optimizations to get the engine ready for finally adding the real star of the show: text and audio (wouldn't be much of a visual **novel** or **sound** novel engine without that, right?).  
  
Until next time, thanks as always for reading, and stay tuned!
