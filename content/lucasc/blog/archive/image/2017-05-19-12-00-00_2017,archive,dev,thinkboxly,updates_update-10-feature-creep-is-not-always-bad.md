<!--t Update 10 - Feature Creep (is not always a bad thing) t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-10-feature-creep-is-not-always-bad/update-banner-1-1024x512.jpg image-->
  
Between every major milestone in development, there are always a dozen smaller things that need to be changed, updated, or added. This weekend that's exactly where VNgen finds itself—at the threshold of great change, but in the meantime working through a handful of smaller matters. And yes, I do mean a _handful_ this time, as opposed to the singular focus of the past couple updates. There's definitely reason to be excited, both for what has transpired in the past two weeks, and what's coming next. Because what's coming next is big news for everyone who's been eagerly anticipating VNgen's release.  
  
But I'm getting ahead of myself. First, the basics:  
  

## (Not) Sweating the small stuff

As I've said before, VNgen is not only a premium visual novel engine, but also a pretty powerful sequenced animation system in its own right. As I've considered this use-case in testing, it came to mind that there might be some sequences that developers want players to treat differently, as cutscenes. To this end, you can now not only pause individual events before they are executed, but determine whether or not their actions can be skipped. By setting the optional (and appropriately named) "noskip" value to "true" players will be forced to watch the event to completion, and you won't even have to alter your input code to do it.  
  
[![](/content/images/update-10-feature-creep-is-not-always-bad/code-events-arguments-1024x435.png)](/content/images/update-10-feature-creep-is-not-always-bad/code-events-arguments-1024x435.png)  
_Optional arguments offer the best of both worlds to everyone!_  
In the process of adding small additions like this I also happened to discover a few bugs that previously slipped through the cracks. The biggest of these related to scale and deformations, particularly with characters and their "flip" function. As you may recall, deformations use real-time mesh distortions which typically do not support regular transforms on their own. Adding in support is no small mathematical feat, especially when you combine scale with rotation, perspective, animations, and so forth. But the good news is: it all now "just works"™. As VNgen grows it is becoming increasingly difficult to test every possibility it's capable of, but I will continue to keep my eye out for issues like this so that version 1.0 is as rock-solid as possible.  
  

## In with the New (-ish)

And "rock-solid" doesn't just refer to a bug-free experience, but a pleasant and well-designed one. To this end, although it was never planned, this past week I began re-evaluating my original choice to add sprite replacement to the general element modification scripts. For example, running vngen\_char\_modify would give you about 15 parameters to set, not all of which necessarily related to the same thing. This was cluttered and confusing and required entering a lot of information over and over that might not even be necessary. After thinking things over, I decided to bring some of these sprite-related parameters to an entirely new function, vngen\_\*\_replace.  
  
While this might sound like a minor change, it actually presented a number of challenges considering the previous system only relied on two values in memory (the new sprite, and the fade alpha). However, in order to treat sprite replacements as their own action, more like 7 or 8 values are needed. Adding in these values would mean more memory remapping (and [I've already discussed what a tedious nightmare that is](https://lucasc.me/post/update-07-perspective-completed)) so in the meantime I've opted for something simpler. Since the alpha value is a real number ranging from 0 to 1, I decided to use it as a percentage to calculate the transition time for each frame. Giving sprite fades a timer of their own in this way allows them to be performed simultaneously with other modifications, each with their own transition durations. It's a hack, but one that works well enough to postpone doing it properly until the time is right. Memory re-management, here I come... again... (sigh)  
  
On a happier note, another unplanned feature came to me in this process which I've decided to call "character attachments." This new attachments system gives an unprecedented degree of customizability to visual novel characters as an unlimited number of sprites can be composited together to form a single character (or at least, as many as your target platform can reasonably handle). Think of it like an RPG avatar system, or just use it for those obligatory _[ahoge](http://animanga.wikia.com/wiki/Ahoge)_ we all know and love.  
  
[![](/content/images/update-10-feature-creep-is-not-always-bad/char-attach-demo-1024x576.png)](/content/images/update-10-feature-creep-is-not-always-bad/char-attach-demo-1024x576.png)  
_Now you can put the ThinkBoxly logo on ALL your characters! That's cool, right? Right??_  
It's not quite finished yet, but the _ahoge_—I mean, _attachments_ system mainly runs off existing code and as such is coming along smoothly. The biggest challenge is primarily one of optimization, since it adds another step to the draw pipeline. Ideally, attachments should be arranged by both character and z-axis in memory, but the process of arranging things this way is more costly performance-wise than just arranging by one or the other! This leaves some open questions about how best to proceed, but at the end of the day it's all optional anyhow. If you don't want or need character attachments, you won't be penalized with lower performance just for the fact the feature exists​.  
  

## Last (but not least)

So what's the big news for everyone waiting for VNgen to release? Well, there's still no exact release date, but with all of the above features in place, development will finally be ready to move on to the last major element of the engine: text. This has been saved for last for a number of reasons, not the least of which being that despite its simple-sounding concept, execution is much harder than it sounds. One of Edge VN's greatest strengths is its text system, and I aim to make VNgen's even better.  
  
Of course, even with text in place the work won't be quite over yet. A lot of features depend on text to be fully implemented, so work on things like branching dialog, character animations, and the backlog will continue. But text is the final mountain, so to speak, and after that it's all a cruise downhill to the finish line.  
  
[![](/content/images/update-10-feature-creep-is-not-always-bad/price-cut-1024x356.png)](/content/images/update-10-feature-creep-is-not-always-bad/price-cut-1024x356.png)  
  
Also, speaking of Edge VN, in anticipation of VNgen's release **all** Edge Engine assets will be getting a permanent price cut **starting today**! Moving forward, these will be considered legacy assets with limited support, but it's important to me to keep them available for existing owners and to provide a cheaper alternative to the newer, more advanced assets that will replace them. VNgen and Edge VN are fundamentally different products, and so I feel this change positions them well to coexist in a sort of lite/pro relationship. Big thanks to everyone who has supported VNgen over the last couple of years! Your contributions are what has made VNgen possible.  
  
[Click here to check out the newly-priced lineup!](https://marketplace.yoyogames.com/publishers/603/thinkboxly)  
  
Well, that about does it for this weekend! It certainly was a big one. Expect even bigger and better things to come!
