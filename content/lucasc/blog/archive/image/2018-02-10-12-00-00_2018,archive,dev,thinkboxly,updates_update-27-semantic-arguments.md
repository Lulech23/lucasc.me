<!--t Update 27 - Semantic Arguments t-->
<!--tag 2018,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-27-semantic-arguments/update-banner-1024x512.jpg image-->
  
With all major features in place, VNgen is now on the straight and narrow path to version 1.0. As you'd expect, this means isolating and fixing bugs—many of which are difficult to produce in the first place—but more importantly, the past two weeks have been all about standardization. Sound boring? Well, read on, because as you'll discover, standardization doesn't mean nothing new was added. And even better, you can see for yourself right now!  
  

## Unity in Diversity

Designing a group of disparate functions that all work in the same way is a challenging logical process—and yes, it is a process. I suppose if your IQ is high enough you might be able to foresee all the possibilities ahead of time, but for everyone else, it's a series of experiments and revisions. But that's not a bad thing. Standardization is, in essence, an exercise of recognizing patterns and iterating until everything follows the same pattern. In programming, specifically, this also means reducing redundancy in code by creating functions once and then running those functions instead of writing similar code multiple times. Letting this process develop naturally is a good way to ensure the final product _feels_ natural, and for VNgen this is more important than ever.  
  
As I've stated before, VNgen needs to be two different things to two different kinds of people: high-class presentation for end users, and easy scripting for developers. The first goal was handily achieved when the first Early Access build was released late last year. The second goal is what version 1.0 is all about.  
  

## Taking it Ease-y

A good example of this principle in action is **easing**. For the uninitiated, "easing" is a technique for modifying acceleration in animations, typically to smooth out starts and/or stops.  
  
![](/content/images/update-27-semantic-arguments/vngen-ease-demo5B15D.gif)  
_Two lines are drawn with the same duration, but different acceleration thanks to easing_  
VNgen handles this with its own custom "[interp](https://xga.one/assets/vngen/?section=the-interp-function)" function which provides 30 different easing modes for any two numbers you wish to transition between. It's used almost everywhere—far more flexible and efficient than hard-coding a certain ease mode into each transition and animation that needs it.  
  
Of course, that's assuming each function supports easing in the first place. Up until now, it was a bit of a mixed bag. Only extended functions supported easing originally, but then, destroy functions did too because there was no need for extended and abbreviated versions of that. Now, easing was originally withheld from abbreviated functions to keep them as easy as possible to understand and use, so this created a minor crisis for standardization.  
  
**The solution? Add easing back into abbreviated functions, but make it _optional_ all across the board.**  
  
And herein is where standardization gets interesting: equalizing functions by giving them abilities they lacked before.  
  

## How Does That Sound?

Another example can be found in audio functions. Originally, VNgen's audio functions were designed to imitate the naming scheme used by GameMaker itself—this being because GameMaker's audio functions don't exactly adhere to standard nomenclature themselves. However, as VNgen's audio functions matured, they became less like GameMaker and more like VNgen. More confusing still, some audio functions had no GameMaker counterpart to compare to and ended up with VNgen nomenclature anyhow. All in all, another minor crisis for standardization.  
  
Now, the easy answer might seem to be to change the names to match VNgen and tell developers to just deal with it. But old habits die hard, and in some cases the GameMaker syntax feels more natural. Again, we're talking functions that don't quite conform to either system, so it's not as easy a decision as it sounds.  
  
[![](/content/images/update-27-semantic-arguments/vngen-syntax.png)](/content/images/update-27-semantic-arguments/vngen-syntax.png)  
_Which syntax to use? You decide!_  
In this case, I opted instead to use both. All audio functions now use VNgen nomenclature by default, but wrappers also exist to interpret GameMaker nomenclature to VNgen in real-time. In other words, **there's still only one set of audio functions, but two ways to write them.** Using wrappers does come with a small performance penalty, but in most cases it's negligible—and a small price to pay for accommodating what feels natural for all developers.  
  

## See for Yourself!

And this is just the tip of the iceberg. VNgen 1.9.4 is available now with a [whole slew of updates](https://xga.one/assets/vngen/?section=version-history) for you to try out for yourself! While not all syntactical updates are as seamless as the ones mentioned in this devblog, I trust they will provide a better developer experience for everyone and that the effort to update will be worth it. (You can find a [list of steps that need to be taken here](https://xga.one/assets/vngen/?section=compatibility-notes).)  
  
If you haven't taken advantage yet, VNgen is still available in Early Access on both [Itch.io](https://xgasoft.itch.io/vngen) and the [GameMaker Marketplace](https://marketplace.yoyogames.com/assets/6083/vngen-visual-novel-engine) at a **33% discount**, good until the v1.0 release—which is coming up soon, so act now!  
  
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
