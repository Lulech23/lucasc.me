<!--t Update 26 - I've Got a Feeling t-->
<!--tag 2018,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-26-i-got-feeling/update-banner-1-1024x512.jpg image-->
  
Alright, I've avoided it long enough: after two posts and four weeks of dodging discussion over the state of VNgen, it's finally time to get back in the swing of things for the new year.  
  
As previously mentioned, part of the reason for the delay was life matters in the month of December. But that's not to say things weren't being accomplished—far from it. Rather, the bigger reason is that VNgen was undergoing such major changes that there was never a good point to stop and share it all. Now, most of these changes are internal and won't affect the user experience at all—or at least, they shouldn't. But they were. Other changes were purely experimental, and although interesting, proved incompatible with the engine's design or design philosophy and had to be rolled back. Some days, I couldn't tell if I was making progress or regressing.  
  
But now those days are over, and at last, VNgen is here with a new update. And I'm pretty sure you've never felt anything quite like it before.  
  
Yep, that's right. _Felt._  
  

## Heroes and Villains

Back in the days of Edge VN, because the engine had evolved organically to inherit originally unplanned features, every system was independent. Bespoke. Ad-hoc. For the most part, you probably couldn't tell. But one area that made this fundamental design problem painfully obvious was animation scripts. Edge VN used several types of animation, each unique to a particular type of entity. As a result, you might have to write the same script two different ways just to make it work for two different things.  
  
When VNgen came along, this problem was eliminated from the get-go with unified animation systems that could be applied to any type of entity out of the box. But although this new system solved the issue of writing multiple scripts to accomplish the same animation, it was also passive by necessity. In other words, only a predetermined set of predefined values could be modified; VNgen animations could not and cannot define any new values or create new visual content.  
  
It's a shortcoming that has bothered me since the beginning, and for one petty reason: **Edge VN could create a screen flash in a single script, and VNgen couldn't.**  
  
Now, VNgen could always create a screen flash, certainly. But you'd have to create a new background or foreground layer, possibly modify it to begin fully transparent, and _then_ apply a flash animation. While functional, it's certainly not the most convenient. It could also be argued that, due to perspective math and other properties, scene entities carry a lot of unnecessary baggage for something so simple as a screen flash. That's not to say VNgen's scene system isn't great (it is!), just that it's not a good fit for this particular kind of task.  
  
The solution came from an unexpected place.  
  

## Good Vibrations

Among the past month's experiments was an effort to add haptic feedback support to the engine as standard event actions. For the unaware, haptic feedback (also called 'force feedback') is the vibration you feel in your game controller when something impactful happens on-screen. VNgen is all about taking visual novel presentation to the next level, so this was a very attractive feature to get working, with a lot of untapped potential in the visual novel space.  
  
And indeed, simply getting a controller to vibrate is a trivially easy task, especially in GameMaker Studio. But simply vibrating the controller fundamentally misses the point of haptic feedback. The power of haptic feedback lies in vibration _patterns_, and I quickly realized there was no way I could possibly create a dedicated action for each pattern anyone could ever need. Instead, what I needed was something akin to VNgen's animation scripts—easily-written keyframe sequences, but that modified controller vibration instead of predetermined animation properties.  
  
Now, if you're like me, this should immediately conjure up memories of Edge VN and its bespoke systems for everything. Haunted by this memory, I didn't want to create a separate animation system _just_ for haptic feedback. So instead, I aimed to create something more fundamental.  
  

## Then Came VNgen Effects

VNgen effects are largely identical to animations in function—which is by design, and not an easy feat. Whereas animations modify existing properties, effects execute arbitrary code using up to 16 arbitrary variables which can be defined as whatever the script requires.  
  
But these are still _keyframes_, after all, so the values fed to the effect code shouldn't always equal the values defined. Instead, the actual values are typically somewhere between values defined in one keyframe and values defined in the next. These transitions are what make keyframes into animations.  
  
[![](/content/images/update-26-i-got-feeling/vngen-effect-script.png)](/content/images/update-26-i-got-feeling/vngen-effect-script.png)  
  
This proves tricky when you're trying to combine code and keyframes in a single script, however. If you explicitly set a variable to one value and then execute code based on it, it will only ever equal the value you just set it to, right? Well, not so with VNgen. By adding a second type of keyframe to the existing animation system (simply called "effect()") , it became possible to segregate code and keyframes in the same script, so that keyframe values could be fetched, then processed, then fed into effect code _regardless of where code is performed in the script_.  
  
The ability to "animate" arbitrary code in this way is a huge addition to VNgen that blows open the doors for what it can achieve. Haptic feedback is just the beginning. How about animating the color of the Dualshock 4 lightbar for Playstation 4 users, for example? Or making the game window itself bounce around your Windows desktop? If it's a modifiable property, it can be turned into an effect.  
  
And yes, that includes drawing a screen flash in a single script—using the same underlying technology as haptic feedback.  
  

## New Update in Town

Of course, effects aren't the only new addition to VNgen over the past month! Early Access update 0.9.3 is available now on both [Itch.io](https://xgasoft.itch.io/vngen) and the [GameMaker Marketplace](https://marketplace.yoyogames.com/assets/6083/vngen-visual-novel-engine) at a **33% discount**, good until the v1.0 release—which is coming up soon, so act now!  
  
For a full list of changes, hit up the [changelog](https://xga.one/assets/vngen/?section=version-history) on X1, where you'll also find full online documentation for your perusal—including further details on the new effects system and how to get started writing your own scripts!  
  
And of course, there's little point in making a visual novel engine if you're not going to put it to good use! For that, I leave you with your weekly Yugure no Kagami status report. Expect big things to develop in this space in 2018!  
  

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
