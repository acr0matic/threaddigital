function Copy(container, copyBlock, link) {
  const tooltip = copyBlock.querySelector('.tooltip');
  const element = copyBlock.querySelector('a');
  const linkRef = link;

  const clipboard = new ClipboardJS(container);

  let tooltipTimer = window.setTimeout(() => tooltip.classList.remove("tooltip--visible"), 1000);
  let count = 0;

  element.addEventListener('click', (e) => {
    if (window.matchMedia("(max-width: 996px)").matches) return;
    else e.preventDefault();
  });

  copyBlock.addEventListener('click', () => {
    if (window.matchMedia("(max-width: 996px)").matches) return;
    else CopyValue();
  });

  function CopyValue() {
    count++;

    if (linkRef) text = linkRef.innerHTML;
    else text = element.innerHTML;

    if (count === 2) tooltip.innerHTML = 'Еще раз';
    if (count === 3) {
      tooltip.innerHTML = 'Точно скопировано';
      tooltip.classList.add('tooltip--gradient');
    }

    tooltip.classList.add('tooltip--visible');

    clipboard.text = () => text;

    window.clearTimeout(tooltipTimer);
    tooltipTimer = window.setTimeout(() => {
      tooltip.classList.remove("tooltip--visible");
      setTimeout(() => Reset(), 100);
    }, 1000);

    function Reset() {
      tooltip.classList.remove('tooltip--gradient');
      tooltip.innerHTML = 'Скопировано';
      count = 0;
    }
  }
}
