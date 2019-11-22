<!--t Update 28 - Drawing Infinity As Fast As Possible t-->
<!--tag 2018,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-28-drawing-infinity-as-fast-as-possible/update-banner-1-1024x512.jpg image-->
  
VNgen is an unusual GameMaker product. As previously described, it [breaks the linearity of Step cycles](https://lucasc.me/post/update-25-untangling-quantum) and [re-implements many built-in functions](https://lucasc.me/post/update-09-now-hear-this) to do more work faster. With 1.0 approaching, I'm forced to evaluate the state of each part of the engine and ensure it's working as desired and is consistent with other engine functions, which has often led to even further reworks of standard GameMaker conventions.  
  
Some of these have been significant enough to warrant [spinning off into their own, separate products](https://xga.one/quantum/). However, none so far have been quite as amusing as a certain trick added to VNgen over the past couple of weeks—one which makes drawing infinity a cinch even for the lowest-end hardware on the market today.  
  

## GameMaker and I had a disagreement.

I wanted to create my own camera system independent of viewports or even the new camera system added in GameMaker Studio 2. The reasons for this are many, and also beside the point (you can, in fact, even combine systems). What's important is that my camera system would feature the ability to translate, parallax, zoom, and rotate. Most GameMaker drawing functions were happy enough to comply with a little coaxing. But one function simply refused to budge: drawing tiled sprites.  
  
[![](/content/images/update-28-drawing-infinity-as-fast-as-possible/2018-02-24-1024x576.png)](/content/images/update-28-drawing-infinity-as-fast-as-possible/2018-02-24-1024x576.png)  
_A tiled sprite drawn using built-in tile functions_  
Drawing an image tiled, or endlessly repeated, is a very useful trick in a variety of situations. It can give the illusion of a distant horizon, or animated rain. But while GameMaker tiled sprites can translate, parallax, and zoom, one thing they simply cannot do is rotate. Up until now, this meant that tiled scenes in VNgen would remain static no matter the camera angle, which stood out to say the least.  
  

## That had to change.

Solving this problem has long been on the 1.0 wishlist for me, but only recently did a viable approach start coming to mind. One limitation of GameMaker is that there really aren't that many different ways to draw something, so in rare cases like mine when you need something truly unique, coming up with an efficient solution is challenging. All tiled drawing functions were out the window, so... what was left?  
  
The most obvious answer might be to draw multiple copies of the same image in a grid pattern. The problem with this tactic, however, is that depending on the size of the image and camera zoom, dozens upon dozens of copies may be required to fill the screen. This is slow and mathematically complex, considering each copy would also need its own sine and cosine values calculated to handle rotation.  
  
Instead, I opted for something a bit sneakier: GameMaker stores sprites like pieces of a jigsaw puzzle crammed into larger textures so that when multiple sprites are needed, only one item has to be loaded into memory to display them all. For the most part, you won't even notice since the texture is cropped down for each sprite on the screen. But peel back the cropping, and what do you get? That's right: the entire texture.  
  
[![](/content/images/update-28-drawing-infinity-as-fast-as-possible/texture_0-1024x1024.jpg)](/content/images/update-28-drawing-infinity-as-fast-as-possible/texture_0-1024x1024.jpg)  
_A sample texture page from the VNgen classic demo_  
Because textures have to be cropped, UV coordinates are already employed for every sprite to tell the program where each sprite can be located on the texture. What's interesting about UV coordinates is that most programs allow them to be looped, so if your coordinates exceed the size of the texture itself, they'll be wrapped around like Pac-man going off-screen. In theory, if I could draw my target sprite to its own texture and then intentionally exceed the texture dimensions, I'd end up with a tile _in a single pass._  
  

## And my theory was correct.

It just so happens that GameMaker has an obscure little function called [texture\_set\_repeat](https://docs.yoyogames.com/source/dadiospice/002_reference/drawing/texture_set_repeat.html) (or [gpu\_set\_texrepeat](https://docs2.yoyogames.com/source/_build/3_scripting/4_gml_reference/drawing/gpu/gpu_set_texrepeat.html)) which allows manually determining whether UV coordinates should be looped or not, guaranteeing the correct behavior for tiling done this way.  
  
But getting a sprite to appear tiled without using any tiling functions was just the start. Far more challenging was getting it to appear with the same position, scale, and rotation as a standard scene. Since tiled sprites always fill the screen, the actual X/Y coordinates are always effectively 0, 0, which is the top-left corner of the window. A second pair of offsets, left/top, are used to set the texture _offset_ instead. However, these offsets target a position on the texture itself—again, cropping it. To treat these values as coordinates, they must be reversed.  
  
But getting the right offsets isn't as simple as taking the X and Y coordinates from regular scenes and multiplying them by -1. Perspective, scale, rotation, animations—lots of factors contribute to an entity's position in VNgen, and unlike normal entities, for tiled scenes some factors had to be applied to just the texture offset, others to the literal position, and some to both! Add to that the fact this is all an optical illusion and it's rather tricky to wrap your head around!  
  
[![](/content/images/update-28-drawing-infinity-as-fast-as-possible/2018-02-2428129-1024x576.png)](/content/images/update-28-drawing-infinity-as-fast-as-possible/2018-02-2428129-1024x576.png)  
_A tiled sprite drawn using VNgen's custom tiling solution_  
And an illusion it is. With everything in place, the result looks completely endless, but is actually just a rectangle the exact size of the screen! What's more, despite such vast differences, tiled scenes behave exactly the same as non-tiled scenes for the first time ever. Four-color gradient blending, wipe transitions, and yes, even rotation—it's all there. One less item on the to-do list for 1.0!  
  
In the meantime, VNgen is still available in Early Access on both [Itch.io](https://xgasoft.itch.io/vngen) and the [GameMaker Marketplace](https://marketplace.yoyogames.com/assets/6083/vngen-visual-novel-engine) at a **33% discount**, good until the v1.0 release—which is coming up soon, so act now!  
  
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
