<!--t Update 08 - Sic Parvis Magna t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-08-sic-parvis-magna/update-banner-1-1024x512.jpg image-->
  
I've heard it said that the last 10% of a project is the hardest to finish. The foundations have been laid, all the pieces of the puzzle are in place...and yet there's still a whole checklist of things to do before the work can be considered complete. While VNgen is certainly not done yet, it is this stage where I've found myself for the past couple of weeks, and in more ways than one.  
  
[![](/content/images/update-08-sic-parvis-magna/shaft-logo-cancelled-1024x410.png)](/content/images/update-08-sic-parvis-magna/shaft-logo-cancelled-1024x410.png)  

## Shifting Gears

Now, before we get started, there is one other small matter that needs to be addressed: in the past, I introduced Shaft Interactive and Shaftworks as the future brand for VNgen and my other projects. However, upon sharing the name with my fellow developers, it was decided that Shaft could possibly create confusion with the anime studio of the same name (this correlation will make more sense in the near future). After thinking it over a while, I agreed with them, and so will be replacing the Shaft name with something else which will be announced soon. Rebranding is never a fun or easy process, but if it has to be done, it's better to do it before you're dug in too deep. Overall I'm happy with the new name I've chosen, but to ensure this sort of thing doesn't happen again I'll be waiting until it's more set in stone to start talking about it publicly. Lesson learned.  
  

## Back on target

As far as VNgen is concerned, last week I mentioned that as part of finishing up perspective code I would be able to add sprite offsets into the mix, as most of the necessary calculations were already being done. As you may know, GameMaker Studio natively supports sprite offsets to determine the center point of an object when drawing, which is especially important when performing transforms like scale and rotate. However, VNgen uses the most advanced drawing techniques available to GameMaker, which trade sprite offsets for other features instead. So I added my own.  
  
Unfortunately, simply capturing the native sprite asset and adding it back in did not work due to a bug within GameMaker itself. Sprites would get cut off by the offset value if too close to the edge of the screen! My guess is this is the reason offsets were dubbed 'unsupported' in the first place—easier than fixing the problem, I suppose. And yet, the solution for VNgen was rather simple.  
  
What I've done is added two more arguments to all entity create scripts which set the sprite x and y offset by manually adding or subtracting to the existing position and rotation coordinates. While it's not as user-friendly as a GUI where you can click and set the offset directly, at least it gets the job done.  
  
[![](/content/images/update-08-sic-parvis-magna/2017-04-20.png)](/content/images/update-08-sic-parvis-magna/2017-04-20.png)  
  
And I haven't just left it up to the user to figure everything out for themselves. Since VNgen already uses constants for a number of values, adding a few for offsets was a no-brainer. Constants exist for the center and all four corners of a sprite regardless of its dimensions, so you don't have to do any numbers in your head to figure out where the center point should be. Of course, manual offsets are acceptable as well. Whatever you choose, your center point will be maintained regardless of scale, rotation, or perspective. (Note the opening animations in the Gfycat below. See how each appears from a different starting point?)  
  

<iframe src="https://gfycat.com/ifr/SentimentalFirmBlackfootedferret" frameborder="0" scrolling="no" width="640" height="360" allowfullscreen></iframe>

  
  

## Achievement Unlocked

I certainly didn't anticipate sprite offsets to become such a major issue as to occupy an entire blog post, but then, when I first discovered they wouldn't be a given I wasn't sure if I would take the time to add them at all. Now that they're in and all the basic operations of the engine are complete, I'm very satisfied with the state of VNgen and consider its current code base to be a major milestone in development.  
  
At this stage, all that's left is to add audio, text, and branching dialog options to the mix. Each is very unique and will present its own unique challenges, but the light is at the end of the tunnel. Exciting things to come, so stay tuned!
