<!--t Myths vs Truths: Multicore CPUs t-->
<!--tag 2012,archive,features,tech,thinkboxly tag-->
<!--image /content/images/myths-vs-truths-multicore-cpus/maxresdefault2-1024x640.jpg image-->
  
So you just bought a new computer with 6 CPUs running at 3GHz each? Wow! That’s a lot of horsepower!  
  
…but is that really what you ended up with?  
  
Even though multicore CPUs have been around for years now, it has constantly been a struggle for the average consumer to understand what exactly they’re getting themselves into. As a matter of fact, even many experts in the consumer technology field still have difficulty explaining with accuracy this magical invention that is dual-core, quad-core, hexa-core, and beyond. And really, who can blame a person for being a little bit on the confused side? With so many different configurations out there and so little to clearly explain what the difference is, most people end up either believing misinformation, or giving up entirely on knowing what’s in their machine. Well, no more. It’s Myths vs Truths again here today on ThinkBoxly, and we’re going to tackle this issue of multiple cores once and for all.  
  

### Multi-CPU vs Multi-Core

  
The first thing to tackle while explaining the nature of multi-core CPUs systematically is to cover the differences between having multiple CPUs and having multiple CPU cores, as the two are often mistaken for one another.  
  
Now, you already know that CPU stands for ‘Central Processing Unit’, right? Good. Then with that in mind, here’s the simple version: Multi-CPU is a system of multiple independent processing units, while Multi-Core is a system of multiple interdependent processors in one single unit. If you have a dual-core PC, you do not have multiple CPUs, and if you’re running, say, a dual-CPU web server, you don’t necessarily have a dual-core machine. The key here is understanding what comprises the unit as a whole. Perhaps a diagram will make things a bit clearer:  
  
![](/content/images/myths-vs-truths-multicore-cpus/http://4.bp.blogspot.com/-K8-rkV-ugnk/VTGBlPY3uBI/AAAAAAAACbE/Jqnye-HiNJo/s1600/dualcpu-vs-dualcore%5B1%5D.png)  
In the illustration above, the rounded squares are processing units, while the hard squares are processing cores. The thick black lines running in and out of the units and cores represent the data stream. As you can clearly see, the major difference between dual-cpu and dual-core is found in how data is handled. The two CPUs on the left have data streams completely independent of each other, and what’s more, the motherboard (which isn’t pictured above) is configured to send data to both of them as such. The single CPU on the right, though equipped with two processor cores, has only one data stream from the motherboard that is then dealt amongst all the available cores inside the unit.  
  
From this diagram, now several additional things should logically become plain: the dual-CPU configuration is clearly faster, because it has more data streams and thus more data coming through. In addition, since each of the two CPUs can have multiple cores, all kinds of data can be processed simultaneously. However, it should also be obvious why having multiple cores in one CPU provides extra speed over a single, single-core CPU. Even though there’s only one stream of data, once the data is inside the unit, several cores can tackle it at once, thus giving a vast increase in efficiency, though the difference in rawspeed is fairly minimal.  
  

### Measuring Multi-core Speed

  
Ah yes, speed. If there’s ever something that gets misunderstood in this game, it’s that frequency of how fast the CPU can crunch numbers. Making things even trickier is that multiple common ways of describing multi-core speed are not wrong exactly, even though they may at first seem contradictory and lead to a lot of misunderstanding if not handled well. For example, you may be browsing the web for a new computer and find one that you like which has a quad-core 3.0GHz CPU. Ok, so it operates at 3GHz total. Doing the math, you figure that means each core has a speed of 768MHz. But then you look up a video review to confirm that your purchase is the right one, and the reviewer tells you that the CPU is quad-core, with the cores running at 3GHz each. So wait, does that mean it’s a 3GHz CPU (768MHz times 4 cores), or a 12GHz CPU (3GHz times 4 cores)?  
  
As I said, these terms are seemingly contradictory. To solve this problem, let’s jump right into another illustration:  
  
![](/content/images/myths-vs-truths-multicore-cpus/https://lh4.googleusercontent.com/-a7KLitZLLSo/VTGB_JoNFlI/AAAAAAAACbQ/YMj8Akkew9s/w300-h120-no/cpuspeed_diagram2%5B1%5D.gif)  
In this diagram, on the left we have our dual-core CPU, and on the right we have a single-core CPU. Very importantly, as the caption states, both CPUs operate at the same frequency (sticking with our example, we’ll go ahead and say 3GHz). The little blue dots are individual pieces of data being sent through the CPUs. Now first of all, notice that the data reaches the core of both CPUs at the exact same time. Also notice that it takes the same amount of time for any of the cores to process a bit of data. This is what is meant by the cores being 3GHz ‘each’. In other words, each core has full access to the unit’s overall speed of 3GHz; the dual-core CPU on the left is not operating at 6GHz. But that being the case, it’s not exactly accurate to say that each core runs at 1.5GHz, either. If you were to shut off one of the cores, the CPU would in fact still operate at 3GHz–exactly like the CPU on the right–only it wouldn’t be as efficient in its operation without an additional core to cut down on the amount of data waiting to get through.  
  
In the end, the number of cores in a CPU has absolutely no bearing on its raw speed. A 3GHz CPU is a 3GHz CPU no matter how many ways you try to slice it. The real name of the game, as you’ve probably already figured out, is efficiency. Not how fast data can be pushed through, but how much data can be pushed through at a certain speed. No, it’s not as fun to boast about to your geek friends as ludicrously high frequencies, but the performance boost additional cores can bring to the table is well worth the loss in bragging rights.  
In Summary…  
  
Read the first two lines of this post again. Can you answer the question in line #2 now? If you paid close attention, you’ll be able to conclude that the answer is probably “No”. 6 CPUs at 3GHz each is indeed 18GHz of power, but in the consumer market, it’s much more reasonable to believe that the computer in question simply has a hexa-core CPU with an overall frequency of 3GHz. Disappointing? A little bit, but while such a CPU may not be able to come close to competing with 6 others of its kind put together, having 6 cores is still extremely efficient. And besides, at the end of the day all that matters is that you learned something new and can now share with other people who might be able to benefit from your new found knowledge, right?
