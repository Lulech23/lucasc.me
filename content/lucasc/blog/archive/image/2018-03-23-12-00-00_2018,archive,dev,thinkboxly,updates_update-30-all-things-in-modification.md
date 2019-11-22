<!--t Update 30 - All Things in Modification t-->
<!--tag 2018,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-30-all-things-in-modification/update-banner-1-1024x512.jpg image-->
  
It's hard to believe a third of a year has already passed since VNgen first released in Early Access. With the advent of GameMaker Studio 2 requiring some extra strategizing for the release of version 1.0, the EA period has definitely gone on longer than originally intended, but not unproductively. VNgen has grown by leaps and bounds both internally and externally such that its code is barely recognizable as the same product that shipped in late 2017. 
  
As the march towards 1.0 continues (and indeed is nearly drawing to a close), each component of the underlying engine is being re-evaluated. Why does X feature exist, or why doesn't it? How does it work, and how can it be standardized to work like everything else (or vice versa)? Does it feel natural to use?  
  
All of these are important questions, and only scratch the surface of tests a new change must pass to determine whether it fits the image and scope of VNgen 1.0. But there's also another question that's often more fun: **can this feature give users more control without requiring them to modify anything?**  
  
For the past two weeks, the answer has been a resounding **yes**.  
  

## Out the old...

In the early days, before VNgen had a scripted animations system, transitions were brought over from Edge VN as a mechanic built directly into each entity that needed them. This not only meant lots of duplicate code, but that adding new transitions required modifying dozens of scripts.  
  
While you might not have noticed, this was quickly fixed in Early Access by separating transitions into their own functions and then simply calling those functions. This was a huge improvement, as new transitions could be added once and then "just work" on every entity in the engine by inheritance.  
  
However, there was just one problem: users couldn't add these transitions for themselves.  
  
By this point, VNgen already had scripted keyframe animation support for translations, deformations, and general special effects. Transitions were outdated by comparison, and it also didn't make much sense to have two separate animation systems at play, especially when one was a technological dead end.  
  

## ... And in with the new

The solution is probably clear whether you're a developer yourself or not: ditch transitions in favor of keyframe animations, right? And for the past two weeks, replacing transitions with a new subset of keyframe animations is exactly what I've been doing.  
  
But despite their similarities, transitions and regular animations serve fairly different purposes. It was important to implement the new transitions in a way that was consistent with existing animations, but also to update existing animations for consistency with transitions. While still behaving differently, writing transition scripts needed to feel like writing animation scripts.  
  
For example: to initiate an animation, the entity being animated will read keyframe data and smoothly transition from its original state to the values set in the first keyframe. However, a forward transition should begin at the first keyframe and animate back to the entity's original state.  
  
And 'forward' is a key word here. Unlike animations, transitions perform in two directions: forward on create, and in reverse on destroy. Up until now, animations didn't support this at all. A reverse function had to be built in to all animations to support transitions going both directions—ultimately benefiting both of them.  
  
Another challenge was ease modes. Since the beginning, transitions have supported changing ease modes on the fly, while animations have required easing to be set on a per-keyframe basis, hard-coded into the animation script itself. This was especially a problem since every current VNgen user likely already has ease modes defined for dozens of transitions throughout their projects. Removing this functionality would require lots of manual editing, plus a huge loss in visual variety. The solution here was to keep transition ease modes as an override for keyframe behavior and port the solution back to other animations—again improving animations for consistency with transitions rather than the other way around.  
  
In short, converting transitions to a new form of scripted animations was not easy as the two aren't functionally identical, but the effort was well worth it. Animations are now more flexible than ever, and the door has been blown wide open for endless custom transitions spanning multiple keyframes—something never before possible with VNgen or its predecessor, Edge VN. Even better? You don't have to change anything to start using the new transitions system. Simply update VNgen and you're good to go\*. _(\*Some other compatibility issues apply. [See here for details.](https://xga.one/assets/vngen/?section=compatibility-notes))_  
  
VNgen is designed to be as open to modification as possible without requiring modifying its underlying code. In this way, it provides both a great developer and consumer experience, and one that just keeps getting better.  
  
The new animations update will hit VNgen soon as version 0.9.6. To be the first to try it, get Early Access on both [Itch.io](https://xgasoft.itch.io/vngen) and the [GameMaker Marketplace](https://marketplace.yoyogames.com/assets/6083/vngen-visual-novel-engine) at a **33% discount**, good until the v1.0 release—which is coming up soon, so act now!  
  
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
