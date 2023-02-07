
const oblasty = [
  {
    name: "kamchatka",
    cities: ["Петропавловск-камчатский"],
    top: "40%",
    left: "94%",
    helpLeft: true,
  },
  {
    name: "crimea",
    cities: ["Севастополь"],
    top: "67%",
    left: "0%",
  },
  {
    name: "kaliningradskaya",
    cities: ["Калининград"],
    top: "40%",
    left: "3%",
  },
  {
    name: "krasnodarkiy",
    cities: ["Сочи", "Новороссийск"],
    top: "74%",
    left: "4%",
  },
  {
    name: "rostovskaya",
    cities: ["Ростов на Дону", "Азов", "Волгодонск"],
    top: "72%",
    left: "8%",
  },
  {
    name: "voronezhskaya",
    cities: ["Воронеж"],
    top: "65%",
    left: "9%",
  },
  {
    name: "belgorodskaya",
    cities: ["Белгород"],
    top: "58%",
    left: "8%",
  },
  {
    name: "nizhegorodskaya",
    cities: ["Нижний Новгород", "Дзержинск"],
    top: "62%",
    left: "13%",
  },
  {
    name: "ryazanskaya",
    cities: ["Рязань"],
    top: "55.5%",
    left: "15%",
  },
  {
    name: "vologodskaya",
    cities: ["Череповец"],
    top: "48%",
    left: "16%",
  },
  {
    name: "leningradskaya",
    cities: ["Санкт-Петербург", "Тихвин", "Кронштадт"],
    top: "41%",
    left: "13%",
  },
  {
    name: "chelyabinskaya",
    cities: ["Челябинск", "Магнитогорск", "Троицк"],
    top: "75%",
    left: "24.5%",
  },
  {
    name: "bashkortostan",
    cities: ["Стерлитамак"],
    top: "68.5%",
    left: "23%",
  },
  {
    name: "tatarstan",
    cities: ["Казань", "Набережные Челны"],
    top: "68.5%",
    left: "19%",
  },
  {
    name: "udmurtskiy",
    cities: ["Ижевск"],
    top: "62%",
    left: "21.5%",
  },
  {
    name: "sverdlovskaya",
    cities: ["Екатеринбург"],
    top: "63.5%",
    left: "26%",
  },
  {
    name: "kurganskaya",
    cities: ["Курган"],
    top: "74.5%",
    left: "30.5%",
  },
  {
    name: "altay-republic",
    cities: ["Горно-Алтайск"],
    top: "92%",
    left: "47%",
  },
  {
    name: "altayskiy-kary",
    cities: ["Бийск"],
    top: "88%",
    left: "44%",
  },
  {
    name: "kemerovskaya",
    cities: ["Анжеро-Судженск"],
    top: "80%",
    left: "46.5%",
  },
  {
    name: "novosibirskaya",
    cities: ["Новосибирск"],
    top: "78.5%",
    left: "40.5%",
  },
  {
    name: "tymenskaya",
    cities: ["Тюмень", "Тобольск"],
    top: "71%",
    left: "37%",
  },
  {
    name: "hanty-mansiysk",
    cities: [
      "Ханты-Мансийск",
      "Когалым",
      "Сургут",
      "Нягань",
      "Югорск",
      "Нефтеюганск",
      "Нижневартовск",
      "Урай",
    ],
    top: "62%",
    left: "35%",
  },
  {
    name: "yamalo-nenezkiy",
    cities: ["Новый Уренгой", "Ноябрьск", "Салехард", "Лабытнанги", "Надым"],
    top: "54%",
    left: "41%",
  },
  {
    name: "zabaykalskiy",
    cities: ["Чита"],
    top: "82%",
    left: "71%",
  },
  {
    name: "buryatiya",
    cities: ["Улан-Удэ"],
    top: "86%",
    left: "65%",
  },
  {
    name: "irkutskaya",
    cities: ["Иркутск"],
    top: "82%",
    left: "60%",
  },
  {
    name: "krasnoyarkiy",
    cities: ["Красноярск"],
    top: "76%",
    left: "52.5%",
  },
  {
    name: "yakutiya",
    cities: ["Якутск", "Нерюнгри", "Мирный"],
    top: "46%",
    left: "69%",
  },
  {
    name: "sahalin",
    cities: ["Курильск", "Южно Сахалинск"],
    top: "65%",
    left: "91%",
    helpLeft: true,
  },
];

oblasty.map((item) => {
  jQuery(".gerbs")
    .append(
      `
      <div class="${item.name}">
        <img class="city-img" src="${jQuery(".gerbs").attr(
          "data-path"
        )}/assets/img/gerbs/${item.name}.png" />
        <div class="cities ${item.helpLeft && "left"}" style="display:none;">
          <ul>
            <span class="shadow">
              <svg viewBox="0 0 19 22" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.12441 13.5513C0.228703 12.3787 0.228704 9.62135 2.12441 8.44868L14.4218 0.841657C16.4204 -0.394658 19 1.04289 19 3.39298L19 18.607C19 20.9571 16.4204 22.3947 14.4218 21.1583L2.12441 13.5513Z"/>
              </svg>
            </span>
          </ul>
        </div>
      </div>
    `
    )
    .find(`.${item.name}`)
    .css({ top: item.top, left: item.left });

  item.cities.map((city) =>
    jQuery(".gerbs").find(`.${item.name} ul`).append(`<li>${city}</li>`)
  );
});

$(".city-img").hover(
  function () {
    $(this).siblings(".cities").fadeIn(300);
  },
  function () {
    $(this).siblings(".cities").fadeOut(300);
  }
);