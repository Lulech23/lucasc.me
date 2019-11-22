<!--t GPU Wars: GTX 960 vs GTX 770 (Unboxing and Benchmarks) t-->
<!--tag 2015,archive,features,tech,thinkboxly,video tag-->
<!--image /content/images/gpu-wars-gtx-960-vs-gtx-770-unboxing/gpu-wars-feature-1024x576.png image-->
  
Not all advances in technology are about being faster or stronger. Sometimes the most interesting developments come in small packages—both literally and figuratively. Such is the case with the NVIDIA GTX 960, a GPU on the low end of the current Maxwell generation that thanks to some aftermarket tinkering might just be able to replace last generation's Kepler mid-range cards despite some rather odd limitations.  
  
NVIDIA's X60 cards have long been an attractive consumer product—the 'sweet spot', as they call it, of price versus performance. But while in the past X60 cards have been some logical combination of good and average features, lately it seems much less effort has been put into making these GPUs as good as they can be in the target price range. As such, while even the Fermi-based GTX 460 had a 192-bit bus, the GTX 960 has only a 128-bit bus. While the 460 had only 100 or so fewer CUDA cores than its bigger brother the GTX 470, the GTX 960 is lacking well over 500 CUDA cores by comparison to the GTX 970. In fact, mathematically slice a GTX 980 exactly in half, and you have the GTX 960, clock for clock, byte for byte.  
  
But don't let the numbers fool you: while it may sound like a weak performer, there's actually a lot to love about the GTX 960 now that third parties have had a while to tinker with it and get the most performance possible out of the GPU, to the point where it just might be able to replace last generation's GTX 770. Why make the comparison between these specific cards? A few reasons: 1) they perform almost identically (despite significant hardware disparity), 2) both are typically limited to 2GB of VRAM but got the aftermarket treatment to 4GB, and 3) despite similar performance the GTX 960 consumes half the electricity of the GTX 770 and can be manufactured smaller and quieter, making it an attractive contender for those who—like me—were less than satisfied with the 770's performance-per-watt. It's also worth mentioning that the 770 debuted at twice the price of the 960, but by this point the two are much closer to parity in terms of cost due to NVIDIA discontinuing production of new 770 chips. Today we'll be comparing both cards head-to-head, so whether you find yourself somewhere behind the 770 curve or using a 770 and considering an upgrade, this post is for you.  
  

## Out of the box...

  
First off, the GPUs themselves: I chose an overclocked EVGA GTX 960 with 4GB of VRAM and specialized air cooling solution for this comparison because it's about the best the GTX 960 has to offer and because it compares closely to the other card in this competition: an overclocked GIGABYTE GTX 770, also packing 4GB of VRAM and a specialized air cooling solution. You can check out the unboxing videos for both of these cards with more details following below. Full disclosure: neither card manufacturer or NVIDIA is sponsoring this post.  
  

#### GTX 960:

<iframe width="480" height="360" src="https://www.youtube.com/embed/B6NwCPJG3Uk?rel=0" frameborder="0" allowfullscreen></iframe>

  
  

#### GTX 770:

<iframe width="640" height="360" src="https://www.youtube.com/embed/da0uoRCI228?rel=0" frameborder="0" allowfullscreen></iframe>

  
  

## ...And into the benchmarks

  
Comparing PC hardware isn't as straightforward as it used to be. There's always more than meets the eye to raw bytes and herz. Parallel processing techniques and various software technologies baked into the hardware now augment the base figures for performance beyond simple spec sheets. Good thing too, because if not for this development in recent years, the GTX 960 would be left behind, plain and simple. If you missed the numbers in the videos above, here's a quick rundown to demonstrate:  
  

GPU:

GTX 960  

GTX 770  

Core Clock:  

1216MHz

1137MHz

Boost Clock:  

1279MHz

1189MHz

CUDA Cores:  

1024

1536

Effective Memory Clock:  

7010MHz

7010MHz

Memory Size:  

4GB

4GB

Memory Interface:  

128-bit

256-bit

Memory Bandwidth:  

112GB/s

224GB/s

Memory Type:  

GDDR5

GDDR5

Power Connector:  

1x 6-pin

2x 8-pin  

Max TDP:  

120W

230W

DirectX API Feature Level:  

12\_2

11\_0

  
Now, at first the 960 might seem to hold its own fairly well. It has slightly higher clocks than even an overclocked GTX 770, much lower TDP, and much better DirectX feature support—a big deal with Windows 10 right around the corner. But where things start to look worrisome is when we get to comparing memory throughput. The 960 has half the raw data-crunching capabilities of the older 770, and roughly 500 fewer CUDA cores to handle parallel processing. So how could it possibly manage to keep up? Simple: compression. With the new Maxwell architecture NVIDIA has developed a means to compress video data as it's being piped through the card, allowing the 960 to squeeze more information through a smaller space than the 770. There's no doubt it would benefit from having a little bit more wiggle room, but this and other architectural and software-based tricks allow it to keep up admirably. This also means the 960 is better able to actually take advantage of the extra 2GB EVGA has packed in, whereas the 770 tends to bottleneck before it manages to spill over its first 2GB except in an SLI setup.  
  
But don't just take my word for it. The point, after all, is that there's no test like real-world usage, especially when one card is pulling magic tricks and the other is more conventional. For today's comparison both GPUs were put through a series of 3DMark benchmarks: Firestrike, Sky Diver, and a new DirectX API overhead test. This last test in particular shows how much more efficient DirectX 12 is over DirectX 11, and demonstrates a pretty exciting future for lower-end cards such as these. Take a look:  
  

#### Test 1: Firestrike

  

<iframe width="640" height="360" src="https://www.youtube.com/embed/h4isHY0gTkc?rel=0" frameborder="0" allowfullscreen></iframe>

  
  
**Overall Score Results:**  
  
**GTX 960:** 6,101  
  
**GTX 770:** 6,319  
  
**Combined Score:**  
  
**GTX 960:** 2,682 (12.48 FPS avg)  
  
**GTX 770:** 2,845 (13.23 FPS avg)  
  
_(3 FPS difference at times in favor of 770)_  
  

#### Test 2: The Sky Diver

  

<iframe width="640" height="360" src="https://www.youtube.com/embed/4rtwgZM8FXA?rel=0" frameborder="0" allowfullscreen></iframe>

  
  
**Overall Score Results:**  
  
**GTX 960:** 13,318  
  
**GTX 770:** 13,322  
  
**Combined Score:**  
  
**GTX 960:** 9,400 (38.69 FPS avg)  
  
**GTX 770:** 8,786 (36.16 FPS avg)  
  
_(10 FPS difference at times in favor of 770)_  
  

#### Test 3: DirectX API Overhead Test

  

<iframe width="640" height="360" src="https://www.youtube.com/embed/aPUAErDAFD0?rel=0" frameborder="0" allowfullscreen></iframe>

  
  
_(Values in draw calls per second. Higher is better.)_  
  
**GTX 960:**  
  
DirectX 11 Single-thread: 745,584  
  
DirectX 11 Multi-thread: 1,087,524  
  
DirectX 12 Combined: 6,680,203  
  
**GTX 770:**  
  
DirectX 11 Single-thread: 736,030  
  
DirectX 11 Multi-thread: 797,627  
  
DirectX 12 Combined: 5,788,629  
  
_Note that this test is not the same as usual benchmarks in that it doesn't directly compare the power of two GPUs. The API Overhead Test measures how many draw calls a system can handle in single-threaded DX11, multi-threaded DX11, and two rounds of DX12, without falling below 30 FPS. Think of this test more as each GPU competing against itself. At this point actual games top off at 50,000 draw calls on the extreme high end, so any card capable of pushing more than that in DX12 is set to play today's games effortlessly with the API of tomorrow (provided DX12 support is patched in to each game individually)._  
  

## The Verdict? Well, there's not one, really.

  
In the end, there's no clear winner. If you're a GTX 770 user and you're satisfied with the performance you're getting—especially per-watt—it may be best to wait another generation or two to pick up a really strong successor capable of full DirectX 12 support. On the other hand, if you're looking for a cheap upgrade from a 760 or older NVIDIA GPU, the 960 is a really solid and really affordable step up that will get you decent performance and all the latest in graphics technology rolled into a light, energy-efficient package. For the most part both cards are effectively on-par, with the 770 sometimes having a slight edge and the 960 sometimes having a slight edge. At this stage in the game the most attractive advantage of the 960 is simply its price. If you act soon, you'll easily be able to sell off a GTX 770 for the full cost of an aftermarket GTX 960. It won't get you much of an increase in performance—a slight decrease, in a few cases—but the tradeoff in power consumption and additional feature support is certainly worth it. With the GPU market on the cusp of some really major shifts and advances as virtual reality looms near on the horizon there's really no good GPU available that won't be completely replaced with something faster, cheaper, and more efficient in the next couple of years. If you can live without the ultimate gaming performance of today, the GTX 960 may just be the best thing to hold you over for the ultimate gaming performance of tomorrow.
