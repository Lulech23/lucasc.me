<!--t Update 17 - Music to the Ears t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-17-music-to-ears/update-banner-1024x512.jpg image-->
  
It's hard to believe, but it has now been two weeks since the unveiling of Yugure no Kagami as the debut game of my indie career. Things have been a bit quiet since then, but don't let the silence deceive you: behind the scenes, things are more active than ever. So much so that, in fact, this week we'll be able to check off a category from the to-do list entirely—and you'll get to hear the results!  
  
[![](/content/images/update-17-music-to-ears/banner-frontpage-1024x341.png)](/content/images/update-17-music-to-ears/http://www.ynkgame.com/)  

## Yugure no Kagami Status Report

table span { background-color: #06F; color: #FFF; padding: 5px 10px; display: inline-block; }  

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

  
As promised, it's time for our second biweekly Yugure no Kagami status report, and if you recall the graph from last time, you'll notice that one category has jumped quite a bit this week—namely, music!  
  
That's right: the soundtrack for Yugure no Kagami is 100% complete! Back in 2014 when I wrote the melody for the series theme song I never imagined it would get the professional treatment it has. The final soundtrack is comprised of several licensed tracks plus 11 original tracks composed, arranged, and performed by the very talented [Vincenzo Prestigiacomo](https://soundcloud.com/vprestigiacomo) and [Charles Harrison](https://soundcloud.com/badxinton), whose channels you can check out on Soundcloud at the preceding links. At some point in the future the entire OST will be available for purchase with 100% of the proceeds going to support the artists, but in the meantime enjoy the final rendition of the theme song I mentioned:  
  

<iframe width="640" height="360" src="https://www.youtube.com/embed/uCRxlvkNCSo" frameborder="0" allowfullscreen></iframe>

  
If you'd like to learn more about Yugure no Kagami, please check out [the official site](https://www.xgasoft.com/) and consider following XGASOFT on [Twitter](https://twitter.com/xgasoft) and [Facebook](https://www.facebook.com/xgasoft/)!  
  

## Marked up in Red (and green, and blue...)

Also as promised, I'm currently devoting 100% of my time to finishing VNgen, and for these past two weeks that meant adding inline markup to text. As always, I wanted to aim higher than Edge VN, and for the sake of this blog I also wanted to get it done in just two weeks. It was a close call, but in the end things came together right on time for me to say I have achieved that goal.  
  
VNgen now supports markup tags for font, color, shadow, outline, link, speed, and pause—several of which weren't available in Edge VN at all, and the rest of which have evolved significantly. You can think of markup tags like BBCode (if that's still cool anymore). Basically, this feature allows you to stylize certain portions of text by adding simple bits of code within the text itself. And let me tell you, it's not nearly as simple as it sounds. A significant portion of VNgen's text rendering system had to be rewritten or modified to accommodate the additions, and that meant updating label code too so that everything is consistent.  
  
Plus, with new features comes new logistical challenges. Unlike Edge VN, which used realtime text distortion to achieve bold and italics, VNgen allows fully variable fonts. This means multiple fonts may have dramatically different dimensions in a single string, and all of them need to display correctly with proper alignment and lineheight to avoid overlapping or cutting off portions of text. Not only that, but they need to do it _fast_, occupying as little processing time as possible while predicting texture dimensions, linebreaks, and so forth. These types of operations have the potential to be incredibly slow, so coming up with a way to achieve the necessary behaviors in as little code as possible was a bit like playing a game of mad gabs with the engine. I've still got some ideas for optimization in mind, but for now I'm simply happy to say that it works.  
  
Every other type of markup posed its share of difficulties too. Color markup needed a way to support variable numbers of input colors to create gradients, speed and pause markup needed to modify a value _outside_ a logic loop from inside it, link markup needed to execute more than just the user events to surpass Edge VN, and so on.  
  
[![](/content/images/update-17-music-to-ears/vngen-debug-1024x596.jpg)](/content/images/update-17-music-to-ears/vngen-debug-1024x596.jpg)  
  
And you know what that means. Ok, maybe you don't, but it should come as no surprise: **debugging**.  
  
VNgen has long had a debug interface for monitoring many different stats, but along with these new additions to the engine itself came the need for a few upgrades on the debugging side as well. Text links now display hotspot boundaries, and while I was at it I further improved the camera crosshairs to draw a vector for perspective offset and rotate the central crosshair to reflect camera orientation. Further enhancements are planned as the engine nears release too, so stay tuned for that.  
  
Because, well, that release date isn't far off now! With markup out of the way, just two major bullet points remain on the to-do list: dialog options and a rewritten backlog. All signs indicate completing these features and polishing up the final code should land VNgen finally releasing in October. I can't wait to share it with you all!  
  
Until then, thanks as always for reading, and I'll see you next time!
