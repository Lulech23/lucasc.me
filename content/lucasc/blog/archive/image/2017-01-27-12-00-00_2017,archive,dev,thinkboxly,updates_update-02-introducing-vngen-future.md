<!--t Update 02 - Introducing VNgen, the Future of Edge VN t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-02-introducing-vngen-future/update-banner-2-1024x512.jpg image-->
  
Hello, world! It's me again, back with another update. Last time, I shared a bit about starting Shaft Interactive and the new version of Edge Engine to go with it, Shaftworks. [Check that post out here](https://lucasc.me/post/update-01-introducing-shaft-interactive) if you haven't yet. While it's still early-stages stuff, Shaftworks has already been in development for some time now with my initial efforts focused squarely on the successor to Edge VN, which will be known as VNgen. Today we'll take a look at where VNgen currently is in development, the technological breakthroughs that made it possible, and some of the key features that set Shaftworks apart from Edge Engine—and pretty much anything I've ever made before.  
  
Although you haven't seen it yet, Shaft Interactive's slogan is "telling stories with code." And with such a major focus on story, an effective, interactive way to tell stories is at the very center of what Shaft aims to do.  
  
![](/content/images/update-02-introducing-vngen-future/shaftworks-logo-dark-small-1.png)

## From Concept to Creation

Enter Shaftworks VNgen, the spiritual successor to Edge VN, completely rewritten and reimagined from the ground up. Which, unfortunately, was necessary—significant a product as Edge VN is, its focus on being a tinkerer's tool made it unnecessarily unwieldy, especially for larger projects. Even so, it has been used by many developers in multiple commercial projects, but what I discovered was that most people using Edge VN weren't looking for customizable, educational code, but rather a tool that already had solutions for everything they wanted to do. (Sound obvious in hindsight? A bit.) Add to that the growing list of features both planned and realized and very quickly I found myself hitting the ceiling of what Edge VN could achieve—and there was much more I still wanted to do.  
  
I ended up going back to the drawing board and dissecting both what makes a visual novel and what features I wanted to support in a visual novel engine—and how to put it all back together in a way that wouldn't suffer from the same user experience issues as Edge VN. Theorizing possible ways to go about programming it was a challenge that kept me occupied for days, some of which I literally spent looking at a blinking cursor for hours on end, thinking through and finding holes in my logic before I even had a chance to put anything on-screen.  
  
What I needed wasn't just a prototype. I needed the foundation for something completely new and immaculate as clockwork.  
  
What I discovered changed everything. (Forgive the drama, I'm an author.)  
  

## Identity Achievement

What I developed is a way to assign unique identifiers to code itself, automatically, and thereby create an event/action system similar to GameMaker Studio's object system _within an object_. Or in more practical terms, to create my very own scripting language with GML.  
  
As a simple illustration of this breakthrough in practice, take a look at one of the rewritten animation effect scripts:  
  
[![](/content/images/update-02-introducing-vngen-future/effect-keyframe.png)](/content/images/update-02-introducing-vngen-future/effect-keyframe.png)  
As you can see, the 'if' statement is the same for all keyframes in the animation. With normal GML logic this would mean all of these statements are either true or false simultaneously. There's no point to even running the same statement more than once. But with a script ID system such as what I've implemented, things work a bit differently. Instead, only one of these statements will return true at a time, while the rest remain false. You can think of it like a timeline, where the first code block is active until its values have been successfully set, and then the next code block is activated until its values have been set, then the next code block, and so on and so forth. It's also possible to initialize code before executing—effectively combining GameMaker's Create event and Step event into one.  
  
It's a simple function, but with far reaching implications. With VNgen, you no longer have to worry about managing numeric IDs and rearranging dozens of lines of code just to make a small edit or addition here and there. New data can be inserted into the middle of a timeline and the rest will "just work™". This also means individual elements are no longer split up between multiple events. Initialize once in Create, Draw once in Draw, and do the rest in Step. For example:  
  
[![](/content/images/update-02-introducing-vngen-future/vngen-script.png)](/content/images/update-02-introducing-vngen-future/vngen-script.png)  
And yes, you're seeing correctly: this code shows the creation, modification, and destruction of not one, but three textboxes. Why textboxes? Well, they're the simplest element to prototype on, so characters, backgrounds, and the like will come later. But more significantly, with VNgen you're not limited to just one of anything. Run the same script multiple times and it will be treated as an individual each time. Manual IDs are still necessary for creating elements this way, but unlike in Edge VN they're completely arbitrary here. Make them numbers, strings—whatever you want, so long as no two IDs are the same.  
  
Another important tidbit is that designing the engine in this way has unified all the different elements very deeply. For the most part, textboxes, characters, backgrounds, and even text will share the same underlying code, but customized to suit each element's function. So when it comes to things like animation effects, one size fits all. No more managing scripts unique to each element!  
  

## Hindsight is 20/20

But wait, there's more! In fact, one of the first things I worked on for VNgen was not the technical stuff you see above, but rather a new backlog system. Now, Edge VN's current backlog isn't bad—it already beats the majority of visual novel backlogs, if I may say so myself—but for VNgen I knew I wanted to implement a code ID system, and that required a total rewrite of the way the backlog works. After all, if each script is treated as an individual each time it is run, what happens if multiple text or audio elements are created? They all need to make it to the backlog somehow.  
  
Enter the multiple simultaneous entry system. Since VNgen is organized in an event/action syntax, logs are recorded as events as well. That means any text and audio contained in the event is kept as a single entry and displayed or played back as one too.  
  
[![](/content/images/update-02-introducing-vngen-future/vngen-backlog-1024x726.png)](/content/images/update-02-introducing-vngen-future/vngen-backlog-1024x726.png)  
Customization has also been given a boost. Since it's no longer possible to predict how large a single log entry may be, individual item backgrounds have been removed in favor of dividers, and the entire text log background is the user's choice. Add to that the ability to change font and color and you have a very stylable backlog on your hands.  
  
Manual, touch, and on-screen controls make a return too, and now with unlocked scroll values. Scroll one entry at a time or one hundred—the choice is yours, and that means it's now possible to have Home/End or Page Up/Down functions too.  
  

## And that's not the half of it...

Believe it or not, all this is only scratching the surface. If you can't tell, I'm pretty excited for how far VNgen has come and where it's going. It may not look like much yet, but under the hood there's more than meets the eye. The foundations are still being laid, but once all the essential feature and functions are complete, development will pick up in a really big way. Shaftworks represents a change in design philosophy that I really hope to showcase with VNgen by making it one of the most flexible, powerful, and easy to use visual novel engines ever.  
  
To everyone who has used Edge VN and left your feedback: I truly appreciate your support. While VNgen won't be a free update, I hope to make it a very valuable one that will blow the doors wide open for everyone's creativity.  
  
There's much, much more to come, so thanks for reading and stay tuned for next time!
