fn setwalls s8 s6 s2 s4 =(

$stena0.pos = [0,100,0]
$stena1.pos = [50,100,0]

$stena2.pos = [100,100,0]
$stena2b.pos = [150,100,0]
$stena3.pos = [200,100,0]
$stena4.pos = [250,100,0]

$stena4copy01.pos = [400,100,0]
$stena4copy02.pos = [450,100,0]
$stena4copy03.pos = [500,100,0]
$stena4copy04.pos = [550,100,0]

cnt = s8+s6+s2+s4

case cnt of 
(
0:	s=$stena0
1:	s=$stena1
2:  if(s8==s2) then s=$stena2 else s=$stena2b
3:	s=$stena3
4:	s=$stena4
)


s.pos = [0,0,0]

if(cnt==1) then (
	if(s8>0) then r=0 else
	if(s6>0) then r=270 else
	if(s2>0) then r=180 else
	if(s4>0) then r=90
	s.rotation.z_rotation = r
)else
if(cnt==2) then (
   if(s8>0 and s6>0) then r=0 else
   if(s8>0 and s2>0) then r=0 else
   if(s8>0 and s4>0) then r=90 else
   if(s6>0 and s2>0) then r=270 else
   if(s4>0 and s6>0) then r=90 else
   r=180
   
   s.rotation.z_rotation = r   
)else
if(cnt==3) then (
   if(s8==0) then r=270 else
   if(s4==0) then r=0 else
   if(s6==0) then r=180 else
   if(s2==0) then r=90
   s.rotation.z_rotation = r   
)

if(s8>0)then $stena4copy01.pos=[0,40,0]
if(s2>0)then $stena4copy02.pos=[0,-40,0]
if(s4>0)then $stena4copy03.pos=[-40,0,0]
if(s6>0)then $stena4copy04.pos=[40,0,0]

rendoutputfilename = "D:\!\stena"+(s8 as string)+(s6 as string)+(s2 as string)+(s4 as string)+".png"
print filename
)

fn setwalls2 index = (

  s8 = bit.and index 8
  s6 = bit.and index 4
  s2 = bit.and index 2
  s4 = bit.and index 1

  if(s8>0) then s8=1
  if(s6>0) then s6=1
  if(s2>0) then s2=1


setwalls s8 s6 s2 s4

)

--setwalls 1 0 1 0

setwalls2 15