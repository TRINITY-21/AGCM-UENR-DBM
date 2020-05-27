
 function openNav() {
    try{
      document.getElementById("mySidenav").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    } catch(err){

      document.getElementById("err").innerHTML="Please SignIn";
      setTimeout(myfun, 1500);
       
      function myfun(){
        document.getElementById("err").innerHTML= "";
      }
    }
    
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
    
  }




  function RopenNav() {
    document.getElementById("RmySidenav").style.width = "40%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";      
  }
  
  function RcloseNav() {
    document.getElementById("RmySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
    
  }