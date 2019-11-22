<!--t Update 24 - Less is More t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-24-less-is-more/update-banner-1-1024x512.jpg image-->
  
It's almost hard to believe it's been two weeks again. Not because they flew by (they did), or because they dragged (they did). In fact, they were filled with as many ups and downs as usual. And yet, after spending so long stuck in documentation purgatory (which you can read about [here](https://n.lucasc.me/post/update-23-extra-extra-read-all-about-it)), just getting things _done_ was a startling change of pace.  
  
VNgen's to-do list grows shorter every day, and since the last dev blog I've published not one, but _two_ updates to the Early Access release. [You can read the full changelog here](https://xga.one/assets/vngen/?section=version-history), if you're interested. But what the changelog won't tell you is just what these updates mean for the future of VNgen—and how it's gaining features even as the codebase gets smaller and smaller.  
  

## An invisible problem NO ONE cares about

When VNgen first released in Early Access, it had a fundamental problem—a problem almost nobody would've noticed, and that didn't affect functionality in the slightest, but a problem nonetheless. That problem was **redundancy**.  
  
![](/content/images/update-24-less-is-more/redundancy-redundant5B15D.png)  
  
Standardization is one of VNgen's greatest strengths, but until now it only ran skin-deep. All functions _looked_ basically the same, but internally they were running copies of the same code with only one or two minor differences. This was a necessary starting point, of course, to allow for experimentation. Even with a comprehensive design document I didn't know exactly how VNgen would work in practice. But now that the feature set is determined, it's possible to go back and find common elements and combine them. The principle is to only write code once, then execute it as many times as needed, as opposed to copy-pasting the same thing a hundred times in a hundred different places. The latter approach might be easiest in the short-term, but makes changes and additions unnecessarily cumbersome in the long-term.  
  
That being said, although the long-term prospects of standardized code are much better, the trade-off is a more cumbersome short-term instead. Unifying many different elements without breaking anything is not easy, and many changes have to be made and tested along the way. The payoff is worth it, though, and while more work still lies ahead, VNgen is reaping the benefits of a more standardized backend already.  
  

## An obvious solution EVERYONE cares about

A good example of this lies in transitions and scaling modes. When VNgen first released, it had a handful of each built-in to every "create" and "destroy" function—copy-pasted, separate from every other instance of the same code. By unifying transitions and scaling modes into their own, singular functions, it is now possible to add new ones _once... and watch as every VNgen entity automatically "just works" with the new additions._  
  

<iframe src="https://gfycat.com/ifr/TediousPessimisticAnkolewatusi" frameborder="0" scrolling="no" width="100%" height="100%" style="position:absolute;top:0;left:0;" allowfullscreen></iframe>

  
Since the beginning, VNgen has used a "scale" transition which makes elements appear or disappear while scaling in or out from a distance. But really, it didn't make much sense to only provide the transition going one direction, so in the 0.9.1 update, "scale" was renamed to "zoom\_in" and a new "zoom\_out" transition was added to complement it.  
  
Likewise, VNgen also included scaling modes to automatically fit entities such as backgrounds to match the size of the screen at any resolution and aspect ratio. Although useful, at times you may also want free scaling, so the background responds to changes in resolution and aspect ratio without fitting to the screen exactly. In 0.9.2, new proportional scaling modes were added to do just that—and only added once for all entities.  
  
Changes like these were so significant that at one point, VNgen's codebase was literally cut in half... and had _more_ features than before.  
  

## An invisible solution everyone SHOULD care about

I say "at one point", because of course things didn't stay there for long—but that's a good thing. With standardized information comes new ways to harness that information, since you can always look for it in the same place regardless of which entity it belongs to.  
  
Also in 0.9.2, an entire new category of functions was added for retrieving entity properties such as dimensions, position, scale, and rotation. While seemingly insignificant, having access to this basic information opens up a world of possibilities for interactions not previously feasible. Combined with the "mouse\_region" function, for example, it is now possible to determine when the user has clicked on a specific entity and perform non-sandboxed functions like vngen\_goto in response. Or on a more advanced level, assemble custom characters using drag-and-drop to add and remove attachments. The possibilities are something I've been considering for quite some time, and this is just the beginning, so stay tuned!  
  
[![](/content/images/update-24-less-is-more/vngen-banner-small-1024x323.png)](/content/images/update-24-less-is-more/https://xgasoft.itch.io/vngen)  
VNgen 0.9.2 is available now in Early Access on both [Itch.io](https://xgasoft.itch.io/vngen) and the [GameMaker Marketplace](https://marketplace.yoyogames.com/assets/6083/vngen-visual-novel-engine) at a **33% discount**, good until the v1.0 release.  
  
And with that, I leave you with your weekly Yugure no Kagami status report. You may have noticed it's stayed relatively constant for the past few weeks, but hold on, because that's all about to change soon! Progress for VNgen is progress for Yugure no Kagami. If you haven't checked out the project yet, hit up the link below to watch the announcement trailer!  
  

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
