document.addEventListener('DOMContentLoaded',function()
{
  const name = document.getElementById('typing-titlee');
  const titletext = "KRUM CONTAINER";
  let index = 0;
  function typeeffect()
  {
    if (index < titletext.length)
    {
      name.textContent += titletext.charAt(index);
      index++;
      setTimeout(typeeffect,150); 
    }
  }
  setTimeout(typeeffect,700); 
});