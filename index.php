  
 <?php include 'header.php'?>

<title>Codekart - Learn | Implement | Upgrade</title>
<!-- ///////////////////////////////////////// -->
<div class="banner">
    <h1>CodeKart</h1>
    <div class="text-3">A PLATFORM TO GET COURSES RELATED TO YOUR INTEREST<BR>
      WHICH WILL HELP THE CODERS TO BOOST THEIR SKILLS AND BECOME FUTURE READY !!</div>

      <div class="wave">
          <label >LEARN || IMPLEMENT || UPGRADE</label>
      </div>
      <script>
          const text =document.querySelectorAll('label');
          text.forEach(label=>{
              label.innerHTML = label.textContent.split('').map((text,wave)=>
              `<span style="transition-delay:${wave * 25}ms">${text}</span> `).join('');
          });
          
      </script>
     

    
      </div>
</div>

  <!-- //////////////////////////////////////////////////////////////////////////////////////// -->
 
  <section class="benefitss">
  <!-- <section class="upcomebg">  -->
  <H1 style="color: rgb(77, 73, 67);font-family: 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 30;"class="upcomeh1"><b>COURSES COMING SOON!!</b></H1>
    
          <div class="upcome">
          <div class="TILT">
              <div class="EFFECT">
                  <h2 class="cname">Learn UI & UX</h2>
                  <img src="images\uiux.png" class="display" style="width: 21rem;height:25rem">
                
              </div>
          </div>
          <div class="TILT">
              <div class="EFFECT">
                  <h2 class="cname">Web Development Bootcamp</h2>
                  <img src="images\webdev.jpg" class="display" style="width: 21rem;height:25rem">
              </div>
          </div>
          <div class="TILT">
              <div class="EFFECT">
                  <h2 class="cname">Introduction to C#</h2>
                  <img src="images\csharpbasic.jpg" class="display" style="width: 21rem;height:25rem">
              </div>
          </div>
          <script src="vanilla-tilt.min.js"></script>
          <script>VanillaTilt.init(document.querySelectorAll(".EFFECT"), {
              max: 25,
              speed: 400
          });</script>
          </div>
     
                 

   <!-- /////////////////////////////////////////////////////////////////////////////////// -->


                  <div class="upcomeh1" ><h1 style="color: rgb(77, 73, 67);font-family: 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 30;"><b>BENEFITS</b></h1></div>
               
    <section class="section">
                  
                   <div class="paras">
                      <P style="font-size: 24px;" class="sectionTag"><em> TO ANYONE,<BR>FROM EVERYWHERE</em></P>
                                     <p style="font-size: 18px;" class="sectionsubTag"> People from any country,community, professional background,
                                         or age, who have interest
                                         in coding can get connected to our platform ,so that they can buy different courses according to their need
                                         and choice  from this single platform easily without
                                          wasting time in searching diffrent things at different platforms.</p>
                                      </div>
                  
                  
                  
                                          <div class="thumbnail">
                                             <img src="images\accessible.png" class="imgFluid" height="240px" width="240px">
                                          </section>
                  
                             <section class="section-left">
                              <div class="paras">
                            <P style="font-size: 24px;" class="sectionTag"><em>MOVE AHEAD TOWARDS YOUR GOALS</em></P>
                                      <p style="font-size: 18px;" class="sectionsubTag">It will help you to move towards your goal as it will 
                                          trigger you to learn more and more by seeing this wonderful and very useful content 
                                         
                                           and help you in your professional life. </p>
                                            </div>
                  
                  
                                            
                                              <div class="thumbnail">
                                            <img src="images\Goals.jpg" class="imgFluid"  height="240px" width="240px">
                                            </section>
                  
                                   <section class="section">
                                  <div class="paras">
                                    <P style="font-size: 24px;"class="sectionTag"><em>CREDENTIALS</em> </P>
                                                  <p style="font-size: 18px;" class="sectionsubTag"> Credentials provide proof of skills or  competency and demonstrate
                                                       that a person has met certain criteria or has met specific standards. By requiring and storing credentials,
                                                       organizations can reduce risk and improve organizational knowledge.It will give add on to your career and
                                                        provides records of your achievements </p>
                                                             </div>
                                        <div class="thumbnail">
                                           <img src="images\CERTIFICATE.jpg" class="imgFluid"  height="240px" width="240px">
                                          
                                          </section>
                                                <section class="section-left">
                                                               <div class="paras">
                                                              <P style="font-size: 24px;" class="sectionTag"><em>GAIN EXPERTISE</em></P>
                                                              <p style="font-size: 18px;" class="sectionsubTag">Expertise is special skill or knowledge that is acquired by training,
                                                                   study, or practice. By learning more and more you can brush up your knowledge and become 
                                                                   professional at certain things, which will you to understand new things easily and do it 
                                                                   quickly and precisly without mistake . </p>
                                                                  </div>
                                                                  <div class="thumbnail">
                                                                <img src="images\GAINEXPERTISE.jpg" class="imgFluid" height="240px" width="240px">
                                                               
                                                              </section>
                                                          </section>
                  

  
 <?php include 'footer.php'?>






