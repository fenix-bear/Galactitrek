var box;
var target;

function updateAnimation() {
  box = document.querySelector('.mainlogo');
  target = document.querySelector('.navlogo');
  if(target != null){
  console.log(box)
  console.log(target)
  const targetRect = target.getBoundingClientRect();
  const targetX = targetRect.left + targetRect.width / 2 - box.offsetWidth / 2;
  const targetY = targetRect.top + targetRect.height / 2 - box.offsetHeight / 2;
  console.log(targetRect.left, targetRect.width, box.offsetWidth);
  const style = `
    @keyframes minimizelogo {
      0% {
        transform: translate(0, 0);
        height: 8vw;
      }
      50% {
        transform: translate(${targetX}px, ${targetY}px);
        height: 20px;
      }
      100% {
      }
    }
  `;

  const animationStyle = document.createElement("style");
  animationStyle.innerHTML = style;
  document.head.appendChild(animationStyle);}
}

window.addEventListener("scroll", updateAnimation);
updateAnimation();