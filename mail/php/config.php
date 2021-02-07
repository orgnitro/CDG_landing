<?
	// *** Настройка обязательности полей, в случае если они присутствуют в вашей форме

	// // Имя
	// const NAMEISREQUIRED = true;
	// const MSGSNAMEERROR = "⚠ Поле обязательно для заполнения";

	// // Телефон
	// const TELISREQUIRED = true;
	// const MSGSTELERROR = "⚠ Поле обязательно для заполнения";

	// Email
	// const EMAILISREQUIRED = true;
	// const MSGSEMAILERROR = "⚠ Поле обязательно для заполнения";
	// const MSGSEMAILINCORRECT = "⚠ Некорректный почтовый адрес";

	// // Текстовое поле
	// const TEXTISREQUIRED = false;
	// const MSGSTEXTERROR = "⚠ Поле обязательно для заполнения";

	// // Файл
	// const FILEISREQUIRED = false;
	// const MSGSFILEERROR = "⚠ Забыли добавить файл";

	// Соглашение
	// const AGGREMENTISREQUIRED = true;
	// const MSGSAGGREMENTERROR = "⚠ Примите пользовательское соглашение"; 

	// // Сообщение об успешной отправке
	// const MSGSSUCCESS = "Сообщение успешно отправлено";

	// *** SMTP *** //

		require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/phpmailer/smtp.php');
		const HOST = 'smtp.ukr.net';
		const LOGIN = 'ortingro@ukr.net';
		const PASS = 'gDFekAruEDe3TFRu';
		const PORT = '2525';

	// *** /SMTP *** //

  // Почта с которой будет приходить письмо
	const SENDER = 'ortingro@ukr.net';
	
	// Почта на которую будет приходить письмо
	
	// Тема письма
	// const SUBJECT = 'Заявка с сайта';
	const SUBJECT = 'Hello from fake COMME des GARCONS landing';
	
	// Кодировка
  const CHARSET = 'UTF-8';
