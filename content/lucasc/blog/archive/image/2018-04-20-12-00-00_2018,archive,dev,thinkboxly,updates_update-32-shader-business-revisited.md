<!--t Update 32 - Shader Business Revisited t-->
<!--tag 2018,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-32-shader-business-revisited/update-banner-1-1024x512.jpg image-->
  
[I've spoken before](https://lucasc.me/post/update-31-log-and-let-log) about the importance of standardization in VNgen. It's so important, in fact, that multiple times I've discarded working solutions purely because they didn't conform well enough to established guidelines. A while back, one of these solutions involved [using a shader](https://lucasc.me/post/update-13-shader-business) to dim characters while they're not speaking—a method that was quickly replaced by blending in a transparent black rectangle instead. And yet, at the time, I said the effort to incorporate shaders into VNgen wasn't wasted, but that it served as a proof of concept for shaders possibly finding their way back into VNgen in the future.  
  
Well, my friends, the future is now. That's right: as of version 0.9.8, shaders are now implemented into VNgen as first-class citizens alongside transitions, animations, deformations—the whole lot.  
  

## Shade-what?

If you're familiar with shaders, I don't need to tell you what a big deal this is. If you're not, this might sound either completely insignificant or like total black magic. There's a lot of mystery surrounding shaders in popular game culture. See an unbelievably cool effect in your favorite game? Chock it up to shader wizardry.  
  
Right? Well, not quite.  
  
For one thing, there's usually a lot more going on than just shader tricks. For another, shaders are actually quite simple, in principle. You ready for it?  
  
**A shader modifies the position and/or color of vertices (3D) and/or pixels (2D).**  
  
That's really it. But don't let that explanation lower your opinion of shaders. It's the most fundamental abstractions in computing that often prove the most powerful. A similar example in this context would be the Quantum framework VNgen is built upon: Quantum generates numeric IDs for blocks of code and runs them in sequence—that's it. On its own, it doesn't sound that remarkable, but it's this very framework that makes VNgen possible, and VNgen is just one of many applications of the technology. The same is true for shaders.  
  
The addition of shaders as a standard function of VNgen is, ironically, quite unlike anything that has come before. I have no idea how developers will use shaders to change the look and feel of VNgen. All I know is the sky's the limit.  
  
[![](/content/images/update-32-shader-business-revisited/2018-04-2028229.png)](/content/images/update-32-shader-business-revisited/https://3.bp.blogspot.com/-S3oLeh5sYwU/WtpYTtZoywI/AAAAAAAAWOo/_vf4Lsi05ngpDyWQG8Yj8pqvDOrcAOgIACLcBGAs/s1600/2018-04-20%2B%25282%2529.png) [![](/content/images/update-32-shader-business-revisited/2018-04-2028329.png)](/content/images/update-32-shader-business-revisited/https://1.bp.blogspot.com/-qWaWPsiBBVg/WtpYTmqS6OI/AAAAAAAAWOw/0zdFavq8hf4XMqYeTWRAfil_Egku5lBRACLcBGAs/s1600/2018-04-20%2B%25283%2529.png) [![](/content/images/update-32-shader-business-revisited/2018-04-2028429.png)](/content/images/update-32-shader-business-revisited/https://1.bp.blogspot.com/-DtQCijEo994/WtpYTrRJgeI/AAAAAAAAWOs/zSmCjjI00JsrgY1GOS9-esoXTLf-vFB1ACLcBGAs/s1600/2018-04-20%2B%25284%2529.png) [![](/content/images/update-32-shader-business-revisited/2018-04-2028529.png)](/content/images/update-32-shader-business-revisited/https://1.bp.blogspot.com/-i3js0h0PcSw/WtpYUIEUrLI/AAAAAAAAWO0/64WnLqnA3WQIe5IsZlqmwMjPe85yNLZOQCLcBGAs/s1600/2018-04-20%2B%25285%2529.png) [![](/content/images/update-32-shader-business-revisited/2018-04-2028629.png)](/content/images/update-32-shader-business-revisited/https://3.bp.blogspot.com/-52lApufvxf0/WtpYUaMwoII/AAAAAAAAWO4/Re6Ks96BMA0Ogpd-SKbCqMrVzFa34weaQCLcBGAs/s1600/2018-04-20%2B%25286%2529.png) [![](/content/images/update-32-shader-business-revisited/2018-04-2028729.png)](/content/images/update-32-shader-business-revisited/https://4.bp.blogspot.com/-fNB7pDwjFC4/WtpYU3w_ZTI/AAAAAAAAWO8/36njAsnmOsc6KhQgWWTz28PL6dRv3FAMACLcBGAs/s1600/2018-04-20%2B%25287%2529.png)  
_Example shader effects included with VNgen. Click for full size._  

## Shadier and Shinier

And believe it or not, that's not all. VNgen has received numerous smaller updates as well which really add a lot of polish to the overall presentation and experience.  
  
While the backlog may have been last devblog's theme, I didn't stop working on it after the article went up. One issue that has bothered me for a while now is that the backlog sources speaker names from text itself, not labels. That's all well and good, but it came with an unfortunate side effect: backlog name stylization completely ignored any labels active when the text was logged. It might sound like a simple fix, but depending on a VNgen developer's preferences, labels might not even exist. Or maybe more than one exists, and then how's the log supposed to know which label(s) to record? Coordinating text, labels, and backlog style data with any semblance of standardization was tricky, but in the end, I came across a solution that didn't require changing the way things work at all.  
  
To replicate the same text font and colors in the backlog as were originally displayed, VNgen pulls data from two different sources: the engine's internal style database, and any inline markup the user has written into their text strings. To preserve label styles (if any), I added a new function which retrieves label style data and converts it to inline markup which is then injected into the speaker name string. The speaker name and text string are then concatenated and submitted as one into the backlog—everything nice and unified. And at last, backlog styles fully reflect events as they were originally recorded.  
  
[![](/content/images/update-32-shader-business-revisited/2018-04-2028829-1024x551.png)](/content/images/update-32-shader-business-revisited/2018-04-2028829-1024x551.png)  
  
And these two features are just the tip of the iceberg. At version 0.9.8, VNgen is at long last getting very close to completion! In the meantime, you can still find it available in Early Access on both [Itch.io](https://xgasoft.itch.io/vngen) and the [GameMaker Marketplace](https://marketplace.yoyogames.com/assets/6083/vngen-visual-novel-engine) at a **33% discount**, good until the v1.0 release—which is coming up soon, so act now!  
  
And with that, I leave you with your weekly Yugure no Kagami status report. Expect big things to develop in this space in 2018!  
  

## Yugure no Kagami Status Report

[What is Yugure no Kagami? Click here to learn more!](http://www.ynkgame.com/)table span { background-color: #06F; color: #FFF; padding: 5px 10px; display: inline-block; }  

**Script:**

100%

**Artwork:**

1%

**Music:**

100%

**Programming:**

75%

**Voice:**

0%
