<!--t Update 19: Exterminate! t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-19-exterminate/update-banner-1024x512.jpg image-->
  
After a year in development, VNgen is [almost here](https://lucasc.me/post/update-18-vngen-coming-soon), and that means it's time to go over everything with bug spray and a fine-toothed comb. It's a little hard to believe it's only been two weeks since the last devblog, because in that small space of time many things have changed and improved so that when VNgen finally releases it will be rock-solid from day one. So much has happened, in fact, that time will not permit mentioning every last detail, so this weekend we'll be focusing on just the coolest and most important stuff. Check it all out after the jump!  
  

## Cleaning house

There is a certain art to finishing long-term projects. As the saying goes, the last 10% is 90% of the work. In software, there's an additional challenge: not screwing up the other 90% of the work in the process. Fixing bugs always bears the risk of creating new ones, and sometimes even with heavily commented code it can be easy to forget your line of reasoning for doing something a certain way. Then when you modify it (berating your past self for being so stupid), the application promptly reminds you your present self isn't so bright either.  
  
Avoiding this scenario takes care, but with effort many bugs in VNgen have been discovered and fixed over the past few weeks, from obvious issues that have been waiting for months already to some really strange ones. For example, why does the game deliver an "Out of memory!" error when the window is resized in the middle of a text\_destroy action _only_ when the transition is set to wipe? I'm still not exactly sure (memory was definitely not the issue) and the likelihood of an average user ever encountering this exact scenario is small, but by painstakingly isolating the problem I was able to eliminate it regardless.  
  

<iframe src="https://gfycat.com/ifr/AmusedSoggyFlee" frameborder="0" scrolling="no" width="100%" height="100%" style="position:absolute;top:0;left:0;" allowfullscreen></iframe>

_Early mobile tests show that perspective can be effectively mapped to device rotation_  

## Back to basics

It's also amazing how you can spend so much time overcoming logical challenges only to completely rework your solutions in a matter of days later on. In the past two weeks, much of VNgen's core functions have been dramatically improved—additions that will filter down into the standalone Quantum core, and thus future XGASOFT assets as well.  
  
Jumping to specific events is now faster and more optimized than ever, and accepts string labels instead of internal event IDs that aren't typically exposed to the user anyway. Options now support multiple languages along with other text-based actions. They also perform an interesting trick in that now an entire options menu is treated as a single action no matter how many individual options you have and how their various animations and inputs are handled. Looped music and sound effects will maintain their playback position even while jumping forwards and backwards through the timeline with vngen\_goto.  
  
Perspective also got a minor overhaul, and now supports a perspective\_replace function akin to functions of the same name for other entities. Essentially, you can think of this like having two cameras set up and crossfading between them. In fact, that may not be far off from where this feature is headed. With recent changes, perspective code has fallen more in line with that of normal entities, so in the future it may be possible to have multiple perspectives and switch between them or even display multiple perspectives simultaneously.  
  

<iframe src="https://gfycat.com/ifr/AffectionateEveryBangeltiger" frameborder="0" scrolling="no" width="100%" height="100%" style="position:absolute;top:0;left:0;" allowfullscreen></iframe>

_Perspective replacement provides a compelling transition between entire camera viewpoints_  

## One size fits all

Ever since I got my start creating assets that can be used by other developers, I've sought to make things that are as modular as possible. On the one hand, that means you can take your own basic game functions and integrate them into the tools I've created. On the other, the message with Edge VN was loud and clear: users prefer to have the necessities built-in, even if replacing some of them becomes a requirement down the road.  
  
My first response to this was to build dialog options into Edge VN so that an external menu system wasn't necessary. That's now become a standard feature, and has evolved considerably in VNgen. As of today, I'm pleased to announce that **save/load** and **scaling** functions are joining the ranks as well.  
  
As with options, these features might not be a replacement for full-fledged assets that handle the same functions, but they also aren't mere afterthoughts for VNgen. Scaling, in fact, has been built-in to VNgen for quite some time now, but only as a very basic implementation that wasn't very useful in practice. I've worked with over a hundred developers to get scaling running in their projects, and by far the most popular method is locked width, scaled height, or edgeds\_set\_width in Edge Display Scaler lingo. Thus, that's the method I opted to implement into VNgen as well. No, you're not getting Edge Display Scaler for free, but for pure visual novels VNgen's scaling offers a compelling alternative to black bars surrounding your project.  
  
Last, but not least is save files. In a way, the simple operation of writing and reading files is infinitely more complex than a universal scaling solution... because there _is no_ universal way to save and load game data. What data is written and how it is read back is something that must be custom-tailored for each project to some degree—including VNgen. As such, like scaling, VNgen's save functions might not be for everyone, but they provide an important template for more complex projects while covering the bases for pure visual novels.  
  
VNgen's save functions will store and restore the active object, current event, and room coordinates using a basic form of encryption by default. This encryption can also be disabled for human-readable results (important for debugging). Encrypted and unencrypted data can be swapped out seamlessly, and there's even a delete function to erase old data entirely.  
  
With so much accomplished, VNgen is well on track for an October release, but believe it or not, there's still work to be done. However, the to-do list is constantly shrinking. Expect a major announcement next time! Until then, I leave you with this week's Yugure no Kagami status report.  
  

## Yugure no Kagami Status Report

[What is Yugure no Kagami? Click here to learn more!](http://www.ynkgame.com/)table span { background-color: #06F; color: #FFF; padding: 5px 10px; display: inline-block; }  

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
