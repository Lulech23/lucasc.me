<!--t Update 12 - Introducing XGASOFT and X1, the new face of ThinkBoxly Docs! t-->
<!--tag 2017,announcements,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-12-introducing-xgasoft-and-x1/update-banner-1-1024x512.jpg image-->
  
If you've been following this dev blog for a while, you may recall at the beginning of the year I announced that, along with converting this site into a dev blog, I'd be spinning off my other creative efforts into a separate brand, then called Shaft. However, due to potential confusion with a Japanese studio of the same name, I was strongly advised not to move forward with that branding. Well, it turns out coming up with names is hard, but after days (and days, and days) of bouncing ideas around and checking on their availability, I've finally settled on how to move forward.  
  
Oh, and don't worry: VNgen is still making progress too. All this and more after the jump!  
  

## A new name

Considering the title of this post, there's not much point in delaying this one. As you probably already figured out, this new brand I speak of is (drum roll please)...  
  
![](/content/images/update-12-introducing-xgasoft-and-x1/xga-soft-logo-black-1024x384.png)  
  
... **XGASOFT**!  
  
What you may not have figured out, though, is what it _means_. XGA stands for "International Game Arts", and I couldn't think of a more appropriate title for my company (hence, I didn't).  
  
International media is no stranger to this site, considering I've written reviews and covered news for it in the past. With XGASOFT, for the first time I'll be creating it myself. That includes both eastern-inspired content and collaborations with creators around the globe.  
  
There are currently two top-secret projects in the works at XGASOFT (not counting VNgen), so please stay tuned for more information on that over the coming year.  
  

## A new home

In the meantime, there is a second half to XGASOFT that you'll get to experience much sooner. For a while now, ThinkBoxly has hosted a section of [online documentation](https://docs.xgasoft.com/) for Edge Engine, a collection of developer tools stemming from my previous commercial efforts. With XGASOFT being both a consumer and developer brand, I have decided it would be best to divide these two focuses between two websites, the latter of which will be replacing ThinkBoxly Docs very soon.  
  
[![](/content/images/update-12-introducing-xgasoft-and-x1/x1-preview-1024x778.png)](/content/images/update-12-introducing-xgasoft-and-x1/x1-preview-1024x778.png)  
  
**X1** ([www.xga.one](https://xga.one/)) is the developer portal of XGASOFT, and will serve as the one source for all developer materials, moving forward. Here you'll find product pages for developer assets and middleware, in-depth documentation on how to use each one, and video resources to get you started. Yes, you asked for it, and it's been a long time in coming, but video tutorials will be a thing from VNgen onward!  
  
Edge Engine will be moving there too as a legacy product, and when the time comes, the current ThinkBoxly Docs site will redirect to X1 instead. I should note that no new resources will be produced for Edge Engine as part of this transition, but all the same information you're used to having access to will soon be available on a much more robust platform, with new and better content on its way.  
  
And speaking of new content...  
  

## A new entity

Ok, so text in VNgen isn't _quite_ new at this point since I did show it off last time. But hey, it made for catchy headings!  
  
Text in VNgen has come a long way since the last update. Rendering text to textures in memory has made it possible to include all the standard features you'd expect from other entities, although implementing them is far from a simple copy and paste.  
  
For example:  
  

<iframe src="https://gfycat.com/ifr/DeafeningPastelApisdorsatalaboriosa" frameborder="0" scrolling="no" allowfullscreen width="640" height="360"></iframe>

  
  
Ridiculous, no?  
  
What you see above is text being drawn with mesh distortions, outlines, shadows, color modifications, and a standard typewriter effect all at once. And that's just the half of it. Regular scripted animations and the usual assortment of built-in transitions are all there too. It's such a powerful system that the traditional typewriter effect isn't even necessary anymore—other means of transitioning between strings are equally viable and attractive in their own ways.  
  
It's a slow march to the finish, however. Text simply doesn't function like other elements in VNgen, even if it behaves like them. This means lots of new challenges to conquer and bugs to squash.  
  
Take the typewriter effect, for example. In principle, it simply increases a character count each frame until the entire string is displayed. But what about devices that run at different frame rates? What if you want to create a visual novel that can only run at 30 FPS on smartphones but 60 FPS on PCs? Functions like this require some sort of framerate compensation, and since there's no such thing as half a character, the usual methods of dividing time in half to go from 30 FPS to 60 while maintaining the same pace simply don't work here. This means text requires its own frame limiter separate from the rest of the engine. EdgeVN did something similar, but unfortunately VNgen is too different from its predecessor for me to be able to copy my methods from before.  
  
It's challenges like this that will keep me occupied over the next couple of weeks, but while it may not be terribly exciting work in and of itself, the exciting part will come when the job is done. The completion of text will be a huge milestone for VNgen, and begin the countdown for its long-awaited release.  
  
In the immortal words of Shinji Hashimoto, ["Please be excited!"](https://i.ytimg.com/vi/cmqfVLfTkz8/hqdefault.jpg)  
  
Until next time!
