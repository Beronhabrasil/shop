/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function()
{ var alturaWrapper = $('#wrapper').height();
   if(alturaWrapper > 400)
   {
   $('#sidebar').css('height', alturaWrapper + 'px');    
   }
  // console.log(alturaWrapper);
});


