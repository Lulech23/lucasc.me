<!--t Update 35: Building (With) Tools t-->
<!--tag 2018,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-35-building-with-tools/update-banner-1024x512.jpg image-->
  
A wild devblog appears!  
  
For the past couples of months, I've taken a bit of a break from the regular devblog-style posts to cover some related topics instead. Each one was important to me, but there's another reason for the hiatus as well: behind the scenes, things were shifting gears in a big way. It's taken time, but the foundation is laid and I'm now settling into the process of building _with_ tools, not just building tools.  
  
It's been enlightening to place myself in the shoes of a consumer using VNgen in real-world scenarios, and especially pleasant to discover just how well it holds up to daily (ab)use. Once, I forgot a certain feature even existed until I needed it, then _\*bam\*_, there it was. It would have been a huge pain to implement now if it'd been missing, so suffice it to say I was relieved to discover there was no oversight on my part there.  
  
But that's not to say VNgen is perfect, nor is it yet capable of everything it could or should be. Soon it'll be time to talk about my first-party VNgen projects in more detail, but that day is not quite here yet. Today, it's time to take a look at some of the improvements being made to VNgen as a result of creating projects with it myself.  
  

## Two words:

Settings menus.  
  
We all expect them to be there, especially those of us who primarily game on a PC. But even consoles have been getting in on the action as of late with options like "prioritize framerate" and "prioritize resolution" thanks to mid-generation upgrades that can't quite provide both simultaneously. Simply put, giving users options is a necessity to maximize the value of a product in 2018. 
  
And yet, when it comes to actually _making_ a settings menu, it sort of feels like a chore. Much easier would be to just create a game that works one way with no variability whatsoever. And in theory, variables are the key here. Just store some values in an external file and read them into the game. Easy, right? Sure—_when the game starts_. Updating changes in real-time, on the other hand, adds a whole new level of complexity that VNgen wasn't necessarily designed for. Most changes in VNgen occur as actions within events on a timeline. But what if you want to, say, change the volume of all music in the game _right now_ without changing positions in the timeline at all?  
  
Ironically, it was this very example that proved most difficult to solve. VNgen already provides a number of global settings, like vngen\_set\_speed or vngen\_set\_lineheight, for example. Volume, however, was not among them. But considering volume _is_ customizable for each individual sound, adding global volume settings wasn't as straightforward as it might seem. To accommodate both, I had to decouple actual playback volume from the values set in VNgen actions and instead set volume as a multiplier of the built-in volume and the global volume together. It might seem confusing at first that the volume you set isn't necessarily the volume you get, but this is the case in programming more often than you might think: what's most important isn't how things work, but that things work in the way the end user expects.  
  
With that accomplished, a new set of global functions was born, and you can now adjust global volume in real-time with a simple command while original volume values remain intact. My settings menu is complete, and now yours can be too!  
  
Global settings also played a role in some other quality-of-life improvements too. For example, up until now, custom cursors could be set with vngen\_set\_cursor, but this function only supported sprites as cursors. Other values would simply restore the defaults. However, a number of other built-in cursor states are accessible to GameMaker, with one in particular proving especially useful: cr\_none. Setting the cursor to this state hides it—essential for any game not based on cursor navigation, when having a cursor on the screen fast becomes an annoyance. While you could always use a blank sprite as a hack to hide the cursor, adding support for native cursor states was a no-brainer. On top of being able to properly hide the mouse, it's now also possible to display mouse states like "busy" or "resize"—the sort of functionality that makes you think "why wasn't this here in the first place?"  
  
These and many more fixes and improvements are available now in the VNgen 1.0.4 update, which you can download from the [GameMaker Marketplace](https://marketplace.yoyogames.com/assets/6083/vngen-visual-novel-engine) or [Itch.io](https://xgasoft.itch.io/vngen). GMS 2 users who don't own VNgen yet can also [give it a try](https://marketplace.yoyogames.com/assets/7019/vngen-free-trial) for **free**!  
  
VNgen's journey is still just beginning. As always, thanks for tagging along for the ride!
