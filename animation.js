const car = document.querySelector('.car');
const nav = document.querySelector('.nav');

function followLight() {
  const navRect = nav.getBoundingClientRect();
  const navCenterX = navRect.left + navRect.width / 2;
  const carRect = car.getBoundingClientRect();
  const carCenterX = carRect.left + carRect.width / 2;
  const distance = navCenterX - carCenterX;
  const maxDistance = navRect.width / 2;
  const percentDistance = distance / maxDistance;
  const maxAngle = 30;
  const angle = maxAngle * percentDistance;
  car.style.transform = `translateX(-50%) rotate(${angle}deg)`;
}

setInterval(followLight, 10);