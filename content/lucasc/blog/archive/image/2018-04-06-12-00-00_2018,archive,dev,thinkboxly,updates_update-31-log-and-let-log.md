<!--t Update 31 - Log and Let Log t-->
<!--tag 2018,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-31-log-and-let-log/update-banner-1024x512.jpg image-->
  
VNgen's backlog was one of the first things written for the engine well over a year-and-a-half ago. While it might seem like putting the cart before the horse, the backlog was actually a convenient testing ground for some of the new concepts necessary to make VNgen a reality. But then that reality materialized, and the backlog was left the oldest feature, requiring [more than one overhaul](https://lucasc.me/post/update-21-vngen-early-access-available) to keep it up to date.  
  
Nowadays, standardization is the name of the game. VNgen's codebase [has been cut in half](https://lucasc.me/post/update-24-less-is-more) despite more features being added since the first Early Access release. For the past two weeks, it was the backlog's turn yet again—and this time, other problems were also solved in the process.  
  

## Two Birds

While you might not have noticed, text labels have been broken in VNgen for a long time. This was hidden by a dirty hack that forced labels to refresh every single frame, but even so, under certain specific, but very reproducible conditions the works were sprung. Linebreaks were duplicated, the wrong colors were inherited, and sometimes the wrong label altogether would appear.  
  
Meanwhile, dialog text didn't share the same problems. Up until now, text and labels have used fairly different rendering processes and clearly, labels were on the inferior track.  
  
Unifying the two might sound like the easy answer—and the answer it is, although it certainly wasn't easy. Text and labels support different features by design: text has markup support for inline stylization, and labels have support for automatically generating the current speaker name(s). Rolling all this functionality into one process might sound like a good idea in theory, but in practice, it's a nightmare. For example, labels can inherit colors based on the speaking character too. But what if labels also had inline stylization for different colors? Which colors should be used? Even worse, since inline stylization would be part of the character name string, changing styles would literally change the speaker's identity!  
  
And that's just the tip of the iceberg. Dig deeper, and supporting regular text features in labels becomes even more confusing. **So how can one rendering process support both?**  
  

## One Stone

The answer lies in another concept freshly introduced to VNgen: **renderlevels**. Simply put, not every rendering process always needs to run at full power. Some advanced features aren't even supported by low-end platforms, so in these cases, it's actually important for some rendering _not_ to happen.  
  
With update 0.9.4, the first inklings of renderlevel support appeared with the function vngen\_set\_legacy. This script would disable the new texture-based tiled scenes in favor of legacy ones. Legacy scenes don't support rotation, deformation, or gradient color blending, but at least they work in cases where new tiled scenes do not.  
  
Now, vngen\_set\_legacy has been replaced with the much broader function vngen\_set\_renderlevel. The new function not only controls legacy scenes, but a whole host of other rendering features, and separates them into different categories where the higher the rendering level, the fewer features are enabled.  
  
What's great about renderlevels is that they _only_ affect rendering. All the same code and assets exist underneath, which means it's possible to switch renderlevels on the fly. VNgen will automatically choose the best renderlevel for the platform it's running on, but there's nothing stopping you from overriding this behavior for yourself.  
  

## Log and Let Log

While renderlevels themselves may not directly apply to the text and labels situation, the _concept_ behind it certainly does. Just like rendering features can be individually turned on and off, so now can text features. Depending on whether it's dialog text or labels being processed, VNgen will intelligently disable certain features so that text and labels can all be generated through a single process.  
  
And that backlog? Now it too can utilize the updated text rendering process to fully support features that were missing before—like paragraph alignment, for example. And with renderlevels, the opposite is true: on platforms with low texture memory, these features can be restricted to only display basic text.  
  
All these features and more will be available soon in the 0.9.7 Early Access update coming to both [Itch.io](https://xgasoft.itch.io/vngen) and the [GameMaker Marketplace](https://marketplace.yoyogames.com/assets/6083/vngen-visual-novel-engine) at a **33% discount**, good until the v1.0 release—which is coming up soon, so act now!  
  
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
