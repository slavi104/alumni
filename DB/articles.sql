-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Време на генериране: 
-- Версия на сървъра: 5.5.34
-- Версия на PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `games_for_brains`
--

-- --------------------------------------------------------

--
-- Структура на таблица `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Схема на данните от таблица `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `image`) VALUES
(1, 'Учени определиха кога мозъкът ни започва да старее', 'Способността на човешкия мозък да възприема нова информация и да я обработва не е еднаква през различните години от живота на хората. С възрастта тя намалява. Това се случва доста преди човек да достигне т.нар. почтена възраст, съобщи сп. PLoS One, цитирано от БТА. Учени от университета "Саймън Фрейзър" (Канада) са си поставили за цел да установят кога именно започват да намаляват способностите на човешкия мозък. Те са установили, че пределната възраст е 24 години, след което мозъците ни "отслабват". Специалистите са извършили изследване сред хора, чиято дейност е зависела в голяма степен от бързината на реакциите им. В него са участвали 3305 професионални геймъри, играещи на StarCraft 2. Възрастта на участниците е била от 16 до 44 години. С помощта на сложно статистическо моделиране канадските учени са открили, че по-възрастните играчи са вземали решения, засягащи играта, по-бавно от младите им колеги. Един 39-годишен играч например през 15-минутната игра е изразходвал за всяко свое решение по 150 милисекунди повече от своя 24-годишен противник. В резултат това е дало на по-младия предимство от 30 секунди, което е много сериозен показател на StarCraft 2. В същото време учените от университета "Саймън Фрейзър" са установили, че въпреки по-бавните реакции, възрастните участници са се представяли много добре в играта. Това е ставало, тъй като те са компенсирали изоставането си с по-солиден опит, натрупан през годините на тренировки. Това им е позволило по-добре и ефикасно да използват прости, но успешни стратегии, а също по-ефективно да прилагат интерфейса на играта.', 'images/121927_1.jpg'),
(2, 'Четири начина, по които мозъкът ни заблуждава относно парите', 'Някой беше казал „сто долара са си сто долара“. Не винаги обаче, възприятието ни за парите е такова, като причината е, че мозъкът ни често ни дава заблуждаващи сигнали относно стойността на парите. Ето четири ситуации, при които това се случва често. 1. Мозъкът ни приема по различен начин една и съща стойност на парите в различни ситуации Когато става въпрос за отстъпка от 25 лева при покупка на дрехи за 100 лева например или на мебели за 2000 лева, мозъкът ни е склонен да отдаде много по-малка тежест на 25-те лева от по-голямата сума. За да избегнем този капан, е добре да си припомняме какво можем реално можем да си купим с 25 лева или да ги съотнесем към дневното заплащане, за което работим. 2. Мозъкът ви игнорира 99-те стотинки Благодарение на ефекта на „левите цифри“ нашият мозък е склонен да наблегне в много по-голяма степен на цифрите отляво, отколкото на тези отдясно, след запетаята. Така стойност от 19.99 лева се приема за много по-малка от стойност от 20 лева, макар и да ги делят 1 стотинка. Подобен ефект имат и големите числа, като например 17 999 лева, което се приема за много по-малко от 18 000 лева. Един от начините да се справите с този „маркетингов ефект“, който търговците често прилагат, е да използвате смартфона си и да сравните цените на идентични продукти в различни търговци. 3. Вашият мозък третира кредита по различен начин от кеша Поради това, че оперираме с „виртуални пари“, сме много по-склонни да харчим от кредитната карта, отколкото от трудно изкарания ни кеш. Мозъкът ни третира парите по кредитните карти като нещо, за което ще трябва да отговаряме в бъдеще. Нещата се усложняват допълнително, когато имаме „връщане на кеш при покупки“ или други форми на стимули като събиране на точки, мили, бонуси и т.н. Това допълнително може да ни стимулира да правим покупки, които не е много сигурно, че са ни необходими. 4. Мозъкът ни приравнява цената с качеството Според мозъка ни е много по-добре да харчим пари за по-скъпи стоки, което е равносилно на по-високо качество. Това макар и често да е вярно, не винаги е в сила. Осъзнали тази връзка често компаниите имат навика да надуват „безпричинно“ цените на своите стоки, само за да ги представят като по-качествени в главите на потребителите.', 'images/120761_1.jpg'),
(4, '14 изненадващи неща, които засягат волята и вземането на решения', 'Президентът на САЩ Барак Обама носи само сини или сиви костюми. Той споделя пред Vanity Fair, че това е начин да контролира волята си.  “Опитвам се да ограничавам броя на решенията, които трябва вземам," казва той. "Не искам да ми се налага да вземам решения за това какво ям или нося. Защото има прекалено много други решения, които трябва да вземам." Фокусът на Обама върху рутината се подкрепя и от проучвания. Социалният психолог Рой Баумайстър е открил, че силата на волята е като мускул — може да бъде засилвана или да отслабва. Това е важно проникновение, като се има предвид, че в проучване от 2011 г. сред 1 милион души от цял свят става ясно, че хората смятат, че самоконтролът е най-голямата им слабост. Както Баумайстър отбелязва в своята книга „Сила на волята: Най-голямата човешка сила" и в статия за New York Times, силата на волята и вземането на решения са свързани помежду си. Домът, в който сте израснали, броят на решенията, които сте взели днес и това какво правят приятелите ви засягат вашите решения по най-различни начини. Вижте как: Вземайте най-важните си решения сутрин, преди да изпитате "изчерпване на егото." "Фройд експериментирал с това, че егото зависи от умствените дейности, включващи прехвърлянето на енергия," пише New York Times. "Неговите експерименти показали, че човек разполага с ограничен запас от умствена енергия за прилагането на самоконтрол." С напредването на деня вашите енергийни резерви намалява все повече. Вашият мозък има нужда от глюкоза, за да вземате добри решения. "Дори и най-мъдрите хора не взимат добри решения и нивото на глюкозата им е ниско," казва Баумайстър. "По тази причина наистина мъдрите хора не преструктурират компанията в 4 следобед. Ако пък трябва да се вземе решение късно през деня, те знаят, че не трябва да го правят на празен стомах." Магазините за хранителни стоки са открили всичко това преди десетилетия. Според проучвания "точно когато пазаруващите са изтощени след вземането на най-различни решения между рафтовете и тяхната сила на волята е намаляла, те са по-склонни да прибягнат до някакъв вид изкушение, като са особено податливи на сладки неща или газирани напитки или нещо друго, с което да си набавят доза захар." Нашият ограничен запас от "енергия за вземането на решения" означава, че вземането на поредица от решения може да бъде изтощително. Това, от своя страна, обяснява защо пазаруването е толкова изморително. Проучвания показват, че пазаруващите, "които вече са взели най-много решения в магазините, се отказват най-бързо" на тест по математика. Когато като човек е умствено изтощен, е по-вероятно да взема лоши решения. "Да правиш компромиси е сложна човешка способност и по тази причина една от първите, които отслабват, когато силата на волята е изтощена," според New York Times. В края на деня, когато сме по-изтощени физически и психически, е по-вероятно да пропуснем фитнеса след работа или да пием повече, ако излизаме. Създаването на рутинни практики помага на човек да елиминира стреса и да съхрани енергия за важни решения. "Най-успелите хора, според Баумайстър и колегите му, не използват силата на волята си като последна преграда за предотвратяване на катастрофа," пише Times. "Вместо това те съхраняват силата на волята си, като развиват ефективни навици и рутинни практики в училище и на работното място така, че да намаляват стреса в живота си. Те използват самоконтрола си не за да преминават през кризите, а за да ги избягват. Те дават на себе си достатъчно време, за да завършат даден проект; те карат колата си на сервиз за проверка, а не чакат да се счупи." Ако искате да имате по-голяма сила на волята, се наспивайте по-добре. Някои проучвания приравняват недоспиването (по-малко от 6 часа на нощ) с това да си пиян. Недоспиването засяга част от мозъка, която е свързана с вземането на решения. Когато човек е недоспал, "предният кортекс на мозъка бива засегнат особено силно и той губи контрол над тези части от мозъка, които създават желанията и реакцията на стреса. Неконтролираният мозък има склонност за свръхреакция спрямо обикновения ежедневен стрес и изкушения." Подсъзнанието играе ключова роля при подпомагането на вземане на добри решения. "Тъй като съзнателното внимание на човек е ограничено, той трябва да привиква на помощ подсъзнанието си," според Harvard Business Review. Дори и ако нямате възможност да забавите вземането на решение дълго време, ако се заемете с нещо друго, това ще ви откъсне от дилемата и ще позволи на подсъзнанието ви да се прояви.\r\nРешенията ви се оформят от вашите приятели и роднини. Изучаването на социалните групи разкрива колко много неща, за които смятаме, че са индивидуални, като това дали човек напълнява или спира да пуши, всъщност са колективни. Джеймс Фаулър от Калифорнийския университет и Ник Кристакис от Харвард откриват, че нашето поведение е заразно. Ако най-добрият ви приятел напълнее, вероятността вие също да напълнеете нараства с 57%. Ако близък ваш колега откаже цигарите, вероятността вие да го направите се увеличава с 34%. Понякога е най-добре да управлявате идеите си чрез други хора. Когато учени проследили успеха на служителите в компания от сектора на аеронавтиката, в това число патенти и продукти, които тези служители са пуснали на пазара, те откриват, че това какви познати има даден инженер е от огромна важност. След опита, отношенията, които един служител има, са най-големият предсказател за успеха. При хората, които поддържали отношения с колеги както нагоре, така и надолу в йерархията на компанията и в различните отдели, вероятността да успеят била най-голяма. Защо? Защото когато имаш качествени отношения с хората, можеш да комбинираш идеи и да получаваш обратна връзка, което е поредната причина щедрите хора да успяват. Може да е от полза да се поддавате и да казвате "да" на "грешния избор" от време на време. Ако се поддавате на желанията си от време на време, това може да ви вдъхва нови сили, така че да не се чувствате напълно лишен през цялото време, според New York Times. Това ви помагате да поддържате курса в дългосрочен план. Ако поемете ангажимент към някого, решението става по-лесно. Има ли решения, които не трябва да вземате точно сега или които някой друг може да вземе вместо вас? "Вместо да решават всяка сутрин дали да се насилват да спортуват или не, умните хора се уговарят редовно да спортуват заедно с приятел". Ако се подготвяте за вашите моменти на слабост, ще сте по-способни да вземате добри решения. "Вземането на добри решения не е като отличителна черта на човек, в този смисъл, че тя винаги е налице," казва Баумайстър. "Това е състояние, което се мени": Неговите проучвания показват, че хората с най-добър самоконтрол са тези, които структурират така живота си, че да запазват сила на волята. Те не насрочват безкрайни срещи една след друга. Те избягват изкушения като заведения за хранен, в който плащаш вход и после можеш да ядеш каквото си поискаш и си създават навици, които елиминират умственото усилие да се правят избори. Вместо да разчитат на това силата на волята им да не отслабва цял ден, те я съхраняват така, че да е налична в спешни случаи и при вземането на важни решения. "Хората, които са най-добри във вземането на решения, знаят кога да не се доверяват на себе си.“ Ако можете да упражнявате силата на волята си, вероятността да успявате в живота е по-голяма, според проучвания. В проучване на Станфорд от 1972 г. ученици били накарани да седят с бонбон пред тях, без да го ядат в продължение на мъчителни15 мунити. Те щели да получат допълнителен бонбон, ако издържат. Проучването открива, че учениците, които могли да дочакат втория бонбон, имали по-високи резултати на изпита SAT и по-малко от тях употребявали забранени субстанции, в сравнение с техните по-импулсивни приятели. Това обаче, което понякога изглежда като слаба сила на волята, може да бъде качествено вземане на решение. Ако изглежда, че възможността да се действа може да изчезне, може би е по-добре да се изчака. През 2012 г. Селест Кид от Университета на Рочестър публикува проучване, което оспорва експеримента с бонбона. Когато била по-млада, Кид работела периодично в приюти за бездомни и се питала как израстването в подобна нестабилна среда може да повлияе на вземането на решения. Тези деца, си мислела тя, биха изяли бонбона на момента. Не защото обаче не разполагат с достатъчно сила на волята. По-скоро това би било, защото са израснали в среда, в която не могат да вярват на възрастните, че ще спазят обещанията си. "Нашите резултати определено намаляват обществените нагласи, че експерименти като този с бонбона са много мощни начини за диагностициране на капацитета за самоконтрол," казва Кид. "Отлагането на задоволството е разумен избор, само ако детето вярва, че ще получи втория бонбон след относително кратко време." В проучването на Кид децата били накарани да мислят дали провеждащите проучването са надежни или неблагонадеждни. В една част от проучването експериментаторът дал на децата лист хартия и пастели, като им казал да използват тези материали или да изчакат за по-добри. След това дошла уловката – за едната от групите експериментаторът донесъл маркери и цветни моливи; за другата се върнал и се извинил, заявявайки, че няма по-добри материали. След това вече идва тестът с бонбона. Девет от 14 деца в групата с “надеждния” експериментатор изчакали 15 минути за втория бонбон, но само едно от 14-те деца в другата група изчакало. Урокът: това, което изглежда като сила на волята, може и да е доверие.', 'images/121916_1.jpg'),
(5, '13 невероятни факта за човешкия мозък', 'Най-удивителният орган в нашето тяло управлява действията, мислите и чувствата ни. Учените все още не са разбрали изцяло как функционира човешкият мозък. Вижте 13 невероятни факта за него: Тежестта на мозъка ни намалява с възрастта. Ако при мъж на средна възраст този орган тежи средно 1420 гр, то при старец неговото тегло е средно 1380 гр. Мозъкът расте най-бързо при децата – между втората и 11-ата година. В човешкия мозък има между 14 и 100 милиарда нервни клетки. Молитвите са полезни и спасяват от болести. Доказано е, че докато човек се моли, неговото дишане се забавя, а с това се понижават и вълновите колебания в мозъка, което помага на оздравяването. 67% от състава на мозъка е мастна тъкан. Това е миелинът, който обгръща като защитна обвивка всеки неврон. Затова е важно да консумираме повече полезни мазнини, които се съдържат в рибата, зехтина, авокадотото, ядките. Дневно през главата ни минават около 70 хиляди мисли. Вижте още: Как вашият мозък ви лъже? Клетките на човешкия мозък могат да поберат 5 пъти повече информация, отколкото съдържа Енциклопедия Британика. Смята се, че техният капацитет е между 3 и 1000 терабайта, а този на националния архив на Великобритания – 70 терабайта. Мозъкът се нуждае от 20% от кислорода, който постъпва в тялото ни. Шест минути без приток на кислород убиват мозъка. Човешкият мозък не разполага с рецептори за болка. Така че най-вероятно няма да усетите нищо, дори ако бъде прободен с нож. Което не означава, че преминаването през черепа няма да е болезнено. Мозъкът на Айнщайн е тежал 1 230 гр. След смъртта му е бил разделен на 240 парчета между различни известни патолози. В будно състояние мозъкът генерира толкова енергия, колкото да захрани крушка от 23 вата. Мозъкът на жените се свива през бременността и възстановява размера си шест месеца след раждането. В мозъка има 160 950 километра кръвоносни съдове.', 'images/120088_1.jpg'),
(6, '14 научни идеи как ще изглеждат човекът на бъдещето', 'Има много теории за това как ще еволюира човешкото тяло в бъдещето. Според някои процесът на естествен подбор продължава, според други – човекът отдавна е преминал пика на еволюционното си развитие. Според някои тепърва човешкото същество ще усъвършенства възможностите си, според други ще ги губи. Нека все пак видим как учените очакват да се изменим в бъдеще:   Цветът на кожата   Според професора от Йейлския университет Стивън Стърн глобализацията, миграцията и културната дифузия ще направят така, че постепенно населението на земята ще се хомогенизира. Нашите наследници ще имат осреднени черти от всички раси. Луничките и сините очи ще бъдат особена рядкост, ще изчезнат хората с руси коси, а ясно изразения светъл или тъмен цвят на кожата ще е огромно изключение.   Ръст   Установено е, че съществува тенденция към увеличаване на ръста. Нашите първобитни предци не са надминавали  160 см, преди Втората световна война едва 6% от италианците са били с ръст над 180 см, а сега толкова висок е всеки пети жител на Ботуша. Особено забележима е тази тенденция през последните десетилетия, през които ръстът на човека се е увеличил с приблизително 10 см, благодарение на по-достъпното и питателно хранене. Смята се, че човечеството ще продължи да расте.   Красота   Изследователите са забелязали, че красивите жени по-често имат повече от едно дете и по-често раждат момичета. Изводите на учените от Университета в Хелзинки са, че с всяко ново поколение ще се раждат все по-красиви жени. Други изследвания също подкрепят тезата, че човекът на бъдещето ще е по-красив от нас. Той ще има по-тънки черти, спорно телосложение и хубава фигура.   Големи глави   Ако  продължим своето умствено развитие, ставайки все по-сложни и разумни същества, мозъкът ни ще увеличи обема си и човекът на бъдещето ще има по-голяма глава. Впрочем някои учени като Питер Уорд от Университета във Вашингтон не са съгласни с тази теза. Според него бебетата и сега имат толкова големи глави, че това е станало пречка при раждането и в бъдеще човешката глава просто няма накъде да расте.   Наднормено тегло   Изследване на Колумбийския и Оксфордския университет показа, че около 2030 г. половината от населението на САЩ ще страда от наднормено тегло. В същото време парижкия клон на Организацията за икономическо сътрудничество алармира, че за две десетилетия броят на хората с наднормено тегло в ЕС се е удвоил и проблемът вече касае 15% от възрастните европейци и всяко седмо дете. Дали човекът на бъдещето ще е дебел и ленив? Всичко все още е в наши ръце.   Коса   Наричат на шега човека „гола маймуна“ и още Дарвин е забелязал, че космите на телата ни са  рудимент. Кога ще изчезне и последния ни косъм е трудно да се каже., но докато косата остава привлекателна за противоположния пол, генът, отговарящ за окосмяването няма да се изгуби.   Влияние на технологиите   Компютърните технологии, които стават част от нашето ежедневие, несъмнено ще се отразят на развитието на човека. Постоянното използване на клавиатури и сензорни екрани, може да направи нашите пръсти по-тънки, дълги и ловки в бъдеще, а броят на нервните окончания в тях рязко да нарасне. Възможно е също така в бъдеще нашето тяло да е набраздено от вградени в него електронни устройства, с които да управляваме средата около нас.   Мъдреците ще изчезнат   Рудиментарни органи като зъбите мъдреци в устата например ще изчезнат. В еволюционния процес ние вече сме се разделили с няколко броя зъби, които са имали предците ни. В момента около 25% от хората на земята се раждат без поне един корен на мъдрец.Лоша памет и по-ниска интелигентност   Изследователи от Колумбийския университет показаха, че интернет търсачките силно вредят на нашата памет и заменят способността на нашия мозък да съхранява информация. Според неврофизиолога и лауреат на Нобеловата награда Ерик Кандел интернет прави хората по-глупави и намалява способността ни за концентрация. В бъдеще това ще понижи способността на човека да образува невронни връзки между старата и нова информация, навлизаща в мозъка му. Казано по-просто човекът на бъдещето ще е с посредствена интелигентност и лоша памет.   Физическа слабост   Както няколко пъти вече подчертахме, еволюцията ще заличи това, което ни е станало ненужно. Според някои това ще засегне и физическата ни сила. Все по-модерният и развит трансопрт, екзоскелети и различните ни изобретения ще превърнат физическото натоварване в нещо излишно. Изследванията показват, че нашите предци са били значително по-силни у нас, а нашите деца вероятно ще са по-слаби до нас.   Депресия   Изследвания наскоро показаха, че населението на САЩ все повече потъва в порочния кръг на постоянния стрес и депресия. Особено засегнати са хората на възраст между 45-65 години. Депресията често показва, че едно същество става непригодно за средата, която обитава. Учените предупреждават, че в бъдеще нашите емоционални проблеми ще се задълбочат.   Слаб имунитет   Хората от бъдещето най-вероятно ще имат отслабена имунна система и ще бъдат по-податливи на патогенни организми. Съвременните антибиотици и лекартва имат огромен принос за по-голямата продължитеност на живота на човека, но и носят вина за „по-ленивата“ ни имунна система. Човекът на бъдещето ще бъде силно зависим от лекарствата, тъй като почти няма да разполага със собствен имунитет.   Избирателен слух   Човекът има способност да насочва вниманието си към конкретен обект. Също така той може да подбира какво да слуша. Явлението, известно като „ефекта на коктейла“ се състои в това, че на шумно парти сред множество разговори, вие сте в състояние напълно да се фокусирате върху това, което говори събеседникът ви. Тази способност се дължи не на ухото, а на главния мозък. Човекът от бъдещето ще може да се фокусира върху избрания звук още по-добре, тъй като тази способност вероятно ще се развие.   Странно лице   Художникът Николай Лам и доктор Алън Куан създадоха свой модел на това как ще се измени човекът под влияние на техногенните фактори и климата. Сред най-големите изменения, които те предполагат са все по-широко чело, огромни очи, по-тъмна кожа. Според учените генното инженерство ще ни позволи напълно да контролираме собствените си гени.', 'images/119528_1.jpg'),
(7, 'Защо не можете да останете във Facebook само 5 минути?', 'С всички се случва нещо такова: влизате във Facebook за няколко минути, колкото да прочетете лично съобщение, и след час- час и нещо си давате сметка, че още сте там, четейки поредния пост. Какво се случва? В подобна ситуация две особености на нашия мозък действат синергично: получаването на удоволствие от новата информация измества от ограничената ни оперативна памет всички останали задачи, които само допреди минути са ни се стрували важни. Като мишки в клопката на собствените си рефлекси ние продължаваме да натискаме копчето. Впрочем експериментът е направен именно с мишки: след натискане на определено копче, мишките получавали стимулация с ток върху невроните в центъра в мозъка, който отговаря за удоволствието. Експериментът завършва плачевно. Мишките постепенно забравят за всичките си други потребности. Отново и отново те натискат копчето за еуфория, забравяйки да се хранят и почиват до пълно изтощение и смърт.', 'images/116991_1.jpg'),
(8, 'Прави ли ни Google по-глупави?', 'През 2008 г. въпросът „Прави ли ни Google по-глупави?“, зададен от журналиста Никълас Кар обиколи света. Това бе първият опит за достъпно обяснение как точно интернет влияе на на нашия мозък. Впрочем Кар е песимист по въпроса – той показва как интернет влияе негативно не само на паметта и способността ни за аналитично преосмисляне на информацията, но и на способността ни за творчество. По-късно представата за промените, настъпващи в съзнанието ни, значително се разшириха. Да, Google влияе зле на паметта ни, защото ние всъщност не се и опитваме да запомним, а това постепенно отслабва самата ни способност за последващо възпроизвеждане на информация (което всъщност е част от работата на оперативната памет). Освен това увеличаването на скоростта, с която възприемаме информация, влияе негативно на нейното разбиране. Цялата информация, която попада в нашето съзнание, първоначално се обработва от оперативната памет. Ако съдържанието ѝ се определи като важно (в процеса на на осмисляне), то се отвежда в дълбоката памет, която според част голяма част от учените е безгранична. За разлика от нея оперативната памет- тази, която ползваме непрекъснато, може да работи с до три-четири информационни единици. Или както казва професорът от Университета на Вирджиния Питър Дулит ние непрекъснато сме залети от информация, в която се опиваме да намерим поне някакъв смисъл с оперативна памет колкото грахово зърно. Следствие от претрупването на нашата оперативна памет е значителното влошаване на способността ни за концентрация. Многозадачността и неспособността за концентрация отдавна се сочат от учените като враг номер едно на ефективността на работата ни. В същото време експеримент с тинейджъри, които в продължение на десет дни играли компютърни игри, показа значително подобряване на способността за прехвърляне на вниманието от цифрови и текстови задачи на визуални обекти и обратно. Друго проучване пък показа, че видеоигрите повишават сръчността и реакциите на хирурзите. Така че темата остава с отворен край. По думите на специалистите по-сложна от човешкия мозък е само Вселената. Основната способност на нашият мозък е пластичността: ние умеем да се адаптираме и променяме под влияние на задачите, които трябва да решава нашия мозък.\r\n\r\nПрочети повече на: http://profit.bg/news/Kak-internet-promenya-mozuka-ni/nid-116991.html', 'images/119308_1.jpg'),
(9, 'Защо жените помнят повече, а мъжете се ориентират по-добре?', 'Учени направиха близо 1000 сканирания, за да потвърдят нещо, в което много са убедени отдавна – съществува драстична разлика между мъжкия и женския мозък. Карти на невронната мрежа показват, че на средна база женските мозъци са високо свързани през лявото и дясното полукълба в контраст с мъжките, където връзките са основно през предната и задната част. Нервните връзки са подобни на пътна система, през която преминава „мозъчния трафик” на информация. Раджини Верма – изследовател от Университета в Пенсилвания, заяви, че най-голямата изненада била потвърждението на старите стереотипи, според които мъжете са по-способни да възприемат, да координират и да се ориентират, а жените разполагат с повече социални умения и памет, което ги прави по-добри в изпълнението на няколко задачи едновременно. „Ако се позовем на функционалните изследвания, лявото полукълбо на мозъка е повече за логично мислене, а дясното – за интуитивно. Затова ако има задача, която включва и двата неща, това означава, че жените разполагат с по-голям потенциал да я свършат по-добре от мъжете”, заяви Верма, цитирана от „Гардиън”. „Жените са по-добри в интуитивното мислене, помнят по-добре. Когато говорите, жените са по-емоционално свързани – те слушат повече”, добави тя, цитирана от bTV. „Бях силно изненадана, че изследванията потвърдиха стереотипите, налагани от години. Ако искам добро ястие или добра прическа, то със сигурност бих се доверила на мъже”, твърди Верма. Заключенията идват от едно от най-мащабните изследвания на „свръзките” в мозъците на здрави мъже и жени. Картите създават по-пълна картина на това, което се смята за нормално при хората на различни възрасти. Благодарение на тях учените ще се опитат да научат повече за аномалии в тези мозъчни връзки и как те предизвикват разстройства като шизофрения и депресия. В проучването са участвали 428 мъже и 521 жени на възраст до 22 години.', 'images/116149_1.jpg');
INSERT INTO `articles` (`id`, `title`, `text`, `image`) VALUES
(10, 'Изумителни факти за човешките възможности', 'Дейността, която човешкият мозък извършва, създава достатъчно енергия, за да захрани крушка от 10 вата. Съдържащата се в човешкия стомах киселина може да прогори дупка в дървена дъска. Тя е способна да разтопи и ножче за бръснене.       Въздухът от човешкото кихане лети със 150 км в час. При кашлица микробите се пръскат със скорост 96 км/ч. Затова е по-добре да използвате ръката си и при двете действия. Слюнката, която човек изразходва през целия си живот, може да напълни два басейна. Човешкото хъркане е със сила между 60 и 80 децибела. Втората цифра е еквивалент на звука на чук, когато разбива бетон. Един косъм от главата ни може да издържи натоварване до три килограма. Освен това човешката коса е устойчива на много киселини и корозивни материали. Бедрените кости са четири пъти по-здрави от цимент.  Един кубичен сантиметър кост може да понесе натоварване от над 500 килограма. За половин час човешкото тяло произвежда топлина, достатъчна за кипването на 2 литра вода. Клетките на човешкия мозък могат да поберат пет пъти повече информация, отколкото съдържа енциклопедия „Британика“. От електронна гледна точка се смята, че капацитетът на мозъка е между 3 и 1000 терабайта. Носът ни може да помни около 50 000 различни миризми. Той може да поеме може да поеме до 10 000 миризми наведнъж. Желязото в кръвта на човека е достатъчно, за да се направи пирон с дължина 3 см.', 'images/114486_1.jpg'),
(11, 'jhg', 'jghjghmkhgmn', 'images/profile_pictures/d083f00d599975698b6348e83481557dhome-page.png'),
(12, 'hgfhgh', 'jkhkjhl', 'images/profile_pictures/fe6f95cb395e7c2de0749087014255f0Home-Logged.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;