<!--t Update 11 - A Wizard is Never Late t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-11-wizard-is-never-late/update-banner-1024x512.jpg image-->
  
As you may have noticed, it has now been four weeks since the last devblog as opposed to the usual two. A couple of weeks ago, I had some personal matters come up that put a halt to much of my usual work, but all that is now behind me and I am happily back to my regularly-scheduled programming—literally!  
  
On top of that, big things are happening behind the scenes which will surely pay off over the course of the summer. But in order for much of it to happen, VNgen needs to be completed—and this past month has been huge in working towards that goal. Find out how after the jump.  
  

## A matter of character(s)

As previously mentioned, character attachments provide a way for VNgen to composite multiple sprites in real time to create highly custom characters. Of course, more drawing comes at a cost, and since then the drawing pipeline for this process has been optimized greatly. Speed is important to VNgen, and while it simply won't be as fast as Edge VN because it does so much more, this new process for drawing attachments blows the door wide open for advanced customizations. Essentially, attachment data itself has been moved from its own, separate structure​ into character data, reducing the number of reads to memory. This is especially interesting from a technical perspective because it means VNgen is now using 4D data structures for certain kinds of information.  
  
But as nice as that is, I'm sure you're wondering why this matters to the average person. Well, while initially unplanned, this improvement paved the way for attachments to be turned into full-blown entities of their own. That means all the same transitions, modifications, animations, and mesh deformations that come standard with other elements can be applied to attachments—_on top of any being applied to the parent character!_  
  
This type of granular animation control has previously been reserved for specialized applications like Live2D or skeletal animation system like Spine, but with VNgen it comes built right in, accessible at the code level.  
  

<iframe src="https://gfycat.com/ifr/SarcasticBoringHypacrosaurus" frameborder="0" scrolling="no" allowfullscreen width="640" height="360"></iframe>

  
  
Now, I'm well aware many users would prefer a UI to create and preview their animations, and this is definitely something on the long-term roadmap, but for now simply having a character system this robust is a huge win for VNgen that I honestly did not expect to achieve in time for the first release.  
  

## Order in the... code!

Now, there's still no official release date just yet, but as the day draws closer and closer, VNgen is starting to get polished up in some areas that still had a few loose ends.  
  
First, along with combining character and attachment data, the character drawing process has been combined with attachments so that attachment z-index determines whether it appears on top or below the character. Nifty for all those superheroes in need of capes blowing in the wind, right?  
  
Along similar lines, scale and z-index have been factored into perspective calculations for all entities. Not only does this mean perspective is now consistent at all zoom levels, but within each perspective 'layer' (i.e. backgrounds or characters) elements with different scales and depths will be treated as having different distances. This enables highly dynamic scenes with basically infinite levels of parallax, and as an added bonus, scale and z-index are directly proportionate at a level of 1:100, so if you don't like the results, you can counteract the automatic calculations yourself.  
  
Something else you may remember from last time is how I formerly used a single alpha value as a percentage to double as time. I say 'formerly' because... well, despite my earlier defense, it was basically a hack. After devising a means to more quickly add new values to the memory map, I went ahead and did just that, and as it stands, a number of properties now transition properly where they didn't before. Sprite fades are no longer tied to the alpha value and fully support easing, and changes to sprite origin points and auto-scaling transition smoothly as well.  
  

## Getting the word(s) out

But all that is ultimately just icing on the cake compared to the biggest development of the month.  
  
[![](/content/images/update-11-wizard-is-never-late/2017-06-16-1024x576.png)](/content/images/update-11-wizard-is-never-late/2017-06-16-1024x576.png)  
  
That's right: as promised, text is finally underway! There's still many, many features to be added, but the groundwork has been laid and, as you can see in the screenshot above, it works.  
  
Creating a text system might sound simple in theory, but for an engine like this many considerations must be made, and at this point there are still a few difficult decisions left open-ended. Over the coming weeks I will be adding a typewriter effect with variable speed, markup for variable colors, fonts, and clickable links, labels to identify the current speaking character, and more. It won't be my first time programming such things, but doing it in the VNgen environment and making it as easy and convenient as possible to use presents a number of new challenges for me.  
  
Kind of ironic that making it easy is hard, right? But that's the fascinating thing about programming: there is a ratio of complexity to everything you make, where the easier something is to program, the harder it is for the end user to operate, and vice versa. In creating VNgen I've aimed for that "vice versa" as much as possible, but many of the rules I've adhered to thus far to achieve that goal just don't apply to text. It'll require a healthy dose of trial and error and iteration to bring text to completion.  
  
What I can say is that text will operate as a texture in memory, giving it all the same controls and animation properties as other entities in the engine. In fact, with this setup, a typewriter effect is no longer the only option for displaying text on the screen. Fades, wipes, slides, and scales are all equal possibilities, and I'm working to provide color options like gradients, shadows, and outlines using texture-based effects as well—or a combination of both!  
  
With so much work still ahead, it's unlikely that VNgen will hit its original spring release estimate, but I'm confident that the wait will be worth it. I'll have much more news to share besides VNgen over the summer, so be sure to stay tuned to see how it all comes together.  
  
Until next time!
