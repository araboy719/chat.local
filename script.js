// Открыть модальное окно контактов
var btnOpenContact = document.querySelector("#open_contact");
	btnOpenContact.onclick = function() {
		//console.log("Клик по меню контакты")
		var contactsModal = document.querySelector("#contacts-modal");
	    contactsModal.style.display = "block";
    }

// Закрыть модальное окно контактов
var contactsModalCloseBtn = document.querySelector("#contacts-modal .close");
	contactsModalCloseBtn.onclick = function() {
		var contactsModal = document.querySelector("#contacts-modal");
		contactsModal.style.display = "none";
	}

// Открыть модальное окно "Войти"
var btnVoyti = document.querySelector("#voyti");
	btnVoyti.onclick = function() {
		//console.log("Клик по меню войти")
		var voytiModal = document.querySelector("#voyti-modal");
		voytiModal.style.display = "block";
	}

/*
1. Вынести вывод всех контактов в отдельный файл - готово
2. JS - добавить событие на кнопку добавить в друзья 
3. JS - отправить запрос на сервер
4. Если запрос выполнен успешно - вывести контакты
*/

function add(element) {
	var friend_list = document.querySelector("#friend_list");
	console.dir(element);
	var ssylka = element.dataset.ssylka;
	// Создать объект для отправки http запроса
	var ajax = new XMLHttpRequest();
		// Открываем ссылку, передавая метод запроса и саму ссылку 
		ajax.open("GET", ssylka, false);
		// Отправляем запрос
		ajax.send();

	console.dir(ajax);
	// Меняем контент в блоке #friend_list
	friend_list.innerHTML = ajax.response;
}

