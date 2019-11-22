<!--t Update 29 - Gotta Split! t-->
<!--tag 2018,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-29-gotta-split/update-banner-1024x512.jpg image-->
  
As the saying goes, [premature optimization is the root of all evil](https://en.m.wikiquote.org/wiki/Donald_Knuth). On the other hand, this means there are some necessary evils in programming before optimization can happen. Up until recently, that's where VNgen has been, but now with 1.0 fast approaching it's my job to root out those evils.  
  
In other words, it's optimization time. But don't let that word conjure up false impressions of fanboy wars arguing over whether Game X is poorly-optimized or their platform of choice is just inferior. Optimization is... well, a lot of unexciting humdrum much of the time. But it also has a habit of producing new tools you can use, and with the latest update to VNgen, there are several—and you can use them right now!  
  
![](/content/images/update-29-gotta-split/trigger-logo-dark-full-1024x512.png)  
  

## Better Trigonometry

The first of these tools has actually existed for a while, and if you have the latest version of VNgen, you already have access to part of it. The final product is called Trigger (get it?) and is a spin-off from VNgen's improved trigonometry functions over those included with GameMaker.  
  
The central flaw of GameMaker's basic trig functions isn't that they don't work, but that they perform full calculations with each run even if much of that work is needlessly repetitive. There's also a case to be made against confusing nomenclature like "lengthdir\_x" which does _not_ return the length of a direction as the name might imply, but rather the X component of the cosine of a hypotenuse (the given length in pixels). Further adding to the confusion is that this function essentially assumes an origin point of 0, which often causes beginners to wonder how they should factor in the X position of other origin points.  
  
VNgen's, and now Trigger's custom trigonometry functions solve all these problems. Using more logical terminology like "point\_rot\_x" and the ability to store calculations in memory to reduce processing overhead, Trigger is more efficient for both humans and CPUs. There are also multiple variants of each function to allow approaching the same concepts from different angles (no pun intended). Maybe you find it makes more sense to input the length of a triangle's adjacent and opposite sides rather than the length of its hypotenuse. Maybe it's easier to think of your points as a vector instead. It's all virtually the same math under the hood, so why should it be harder for you?  
  
Answer: it shouldn't. And that's why Trigger is available as a standalone product **for free**. Trigonometry is a critical part of any sort of games development, so whether you're a VNgen user or not, I hope this small piece of it will make life easier for you.  
  
![](/content/images/update-29-gotta-split/trigger-demo-1024x576.png)  
_A screenshot of Trigger's demo project demonstrating movement and bullet mechanics based on trigonometry_  
**Download Trigger for free now from [the GameMaker Marketplace](https://marketplace.yoyogames.com/assets/6607/trigger-better-trigonometry) or [Itch.io](https://xgasoft.itch.io/trigger)!**  
  

## Peeling Back the Layers

Another area seeing a huge amount of optimization is VNgen's internal drawing process. Initially, VNgen handled almost all drawing in a single, massive script well over 8000 lines long. Much of this code was redundant and could be split off into shared functions for animations, deformations, and so forth. [This much happened a while ago](https://lucasc.me/post/update-24-less-is-more), but now things have been taken a step further: **each VNgen layer has been split into its own independent drawing process.**  
  
The results mirror the standard set by VNgen's core events/actions system and likewise offer a huge amount of flexibility. Users can now easily disable entire layers or apply shaders to some layers while leaving the rest unaffected, for example. But all this is just the positive side effect of good optimization: oftentimes, optimized code means organized code, and that too is good for both humans and CPUs.  
  

## Updates! Get your updates here!

But that's not all that's new with VNgen! Update version 0.9.5 is now available with features such as custom tiled scenes, paragraph alignment, animation blending support, gradient support for deformations, and more!  
  
**Get VNgen on both [Itch.io](https://xgasoft.itch.io/vngen) and the [GameMaker Marketplace](https://marketplace.yoyogames.com/assets/6083/vngen-visual-novel-engine)** at a **33% discount**, good until the v1.0 release—which is coming up soon, so act now!  
  
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
