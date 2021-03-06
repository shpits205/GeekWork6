<?php
/**
 * Created by PhpStorm.
 * User: shpits
 * Date: 28.11.13
 * Time: 21:46
 */

namespace Acme\GeekBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Acme\GeekBundle\Entity\Country;
use Acme\GeekBundle\Entity\Continent;

class LoadData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $continent = new Continent();
        $continent->setContinent("Америка");
        $countr = new Country();
        $countr->setName("Канада");
        $countr->setContinent($continent);
        $countr->setCapital("Оттава");
        $countr->setPresident("Стівен Харпер");
        $countr->setPopulation(34568211);
        $countr->setSquare(9984670);
        $countr->setNationalFlag("1");
        $countr->setDescription(
            "Канада — государство в Северной Америке, занимает второе место в мире по площади после России. Омывается Атлантическим, Тихим и Северным Ледовитым океанами, граничит с США на юге и на северо-западе, с Данией (Гренландия) на северо-востоке и Францией (Сен-Пьер и Микелон) на востоке. Граница Канады и США является самой протяжённой общей границей в мире.
            Канада — конституционная монархия (королевство) с парламентарной системой, являющаяся двуязычной и многокультурной страной, где английский и французский языки признаны официальными на федеральном уровне. Технологически продвинутое и промышленно развитое государство, Канада имеет многоотраслевую экономику, базирующуюся на богатых природных ресурсах и торговле (в частности с США, с которыми Канада комплексно сотрудничает со времён существования колоний и основания Конфедерации).
            Основанная французским исследователем, уроженцем Сен-Мало (где и похоронен) Жаком Картье в 1534, Канада берёт своё начало от французской колонии на месте современного города Квебек, населенном первоначально местными народами. После периода английской колонизации из союза трёх британских колоний (которые были до этого территориями Новой Франции) родилась канадская конфедерация. Канада получила независимость от Соединённого Королевства в результате мирного процесса с 1867 по 1982.
            В настоящее время Канада является федеративным государством, состоящим из 10 провинций и 3 территорий. Провинция с преобладающим франкоговорящим населением — Квебек, остальные — преимущественно англоязычные провинции, также называемые «английская Канада» в сравнении с франкоязычным Квебеком. Будучи одной из девяти преимущественно англоязычных провинций, Нью-Брансуик является единственной официально двуязычной канадской провинцией. Территория Юкон официально двуязычна (английский и французский), а Северо-Западные территории и территория Нунавут признают 11 и 4 официальных языка соответственно (среди которых также присутствуют английский и французский)."
        );
        $manager->persist($continent);
        $manager->persist($countr);


        $countr = new Country();
        $countr->setName("США");
        $countr->setContinent($continent);
        $countr->setCapital("Вашингтон");
        $countr->setPresident("Барак Обама");
        $countr->setPopulation(315663000);
        $countr->setSquare(9826675);
        $countr->setNationalFlag("2");
        $countr->setDescription(
            " Сполучені Штати Америки, також США, Сполучені Штати, Штати, Америка (англ. United States of America, USA, U.S., the USA, America, the States) — федеративне об'єднання в Північній Америці, що складається з 50 штатів: Аляски, Гаваїв, 48 штатів на території між Атлантичним і Тихим океанами і між Канадою і Мексикою та федерального (столичного) округу Колумбія. Окрім того, США належать Віргінські острови та Пуерто-Рико у Вест-Індії, Східне Самоа, Гуам та інші острови в Океанії. Столиця — місто Вашингтон.
            Площа країни 9 826 675 км², населення — 315,663,000 осіб (оцінка 2013 року, 3-тє місце у світі). Офіційна мова — англійська (де-факто), юридично офіційної мови немає. Грошова одиниця — долар США. Сполучені Штати — одна з найбільш етнічно строкатих і мультикультурних країн у світі, що склалося історично внаслідок великомасштабної імміграції з різних країн та континентів[5]. США має найрозвиненішу у світі економіку з найвищим ВВП, що становило у 2012 році $15.653 трильйони (22% номінального світового ВВП і понад 19% глобального паритету купівельної спроможності)[3] За прибутком на одного мешканця Штати посідають 7-ме місце у світі[3].
            США — федеративна конституційна республіка, в якій владні повноваження розподіляються між федеральним урядом і урядами 50 штатів. Кожен із 50 штатів має свою конституцію, систему органів влади і управління. Виконавча, законодавча і судова влада представлені відповідно Президентом, Конгресом і Верховним Судом. США є засновниками ООН і мають постійне місце в Раді Безпеки ООН, є засновниками Північноатлантичного альянсу. США володіють могутніми збройними силами, зокрема найбільшим військово-морським флотом, США мають в своєму розпорядженні найбільший за сукупною потужністю ядерний потенціал на Землі[6]."
        );
        $manager->persist($continent);
        $manager->persist($countr);

        $continent = new Continent();
        $continent->setContinent("Європа");

        $countr = new Country();
        $countr->setName("Україна");
        $countr->setContinent($continent);
        $countr->setCapital("Київ");
        $countr->setPresident("Віктор Янукович");
        $countr->setPopulation(315663000);
        $countr->setSquare(45495252);
        $countr->setNationalFlag("3");
        $countr->setDescription(
            "Україна  — держава у Східній Європі, у південно-західній частині Східноєвропейської рівнини. Площа становить 603 628 км². Найбільша країна, чия територія повністю лежить в Європі[3], друга країна за величиною на європейському континенті, якщо враховувати Росію. Межує з Росією на сході і північному сході, Білоруссю на півночі, Польщею, Словаччиною та Угорщиною — на заході, Румунією та Молдовою — на південному заході. На півдні і південному сході омивається Чорним й Азовським морями.
            Віддавна на території України існували держави скіфів, сарматів, готів та інших народів, але відправним пунктом української державності й культури вважається Київська Русь 9—13 століття[4]. Після монгольської навали її спадкоємцем стало Руське королівство 13—14 століття[4]. Воно було поглинуте сусідніми Литвою та Польщею, об'єднаними з 16 століття у федерацію Річ Посполита. Формування новітньої української нації припало на часи визвольної війни 1648–1657 років під проводом Богдана Хмельницького проти Речі Посполитої[5][4]. Результатом війни стало заснування в Україні козацької держави Війська Запорозького. Через міжусобиці вона опинилася розділеною між Польщею та Росією. У 18 столітті козацька автономія була остаточно ліквідована російським царатом. Під час української революції початку 20 століття постало декілька національних держав: Українська Народна Республіка, Українська Держава, Західно-Українська Народна Республіка, Кубанська народна республіка[6] та інші. Внаслідок, поразки українських визвольних змагань 1917–1921 років ці держави були поглинуті сусідами: Радянською Росією, Польщею, Румунією і Чехословаччиною. На російській території була створена більшовицька Українська Радянська Соціалістична Республіка (УРСР), яка 1922 року увійшла до складу Радянського Союзу. Відлунням визвольних змагань стало проголошення незалежності Карпатської України в 1939 році, що була окупована Угорщиною. В ході Другої світової війни до УРСР була приєднана Західна Україна, а 1954 року — Крим. Сучасна держава Україна утворилась в результаті розпаду Радянського Союзу, скріпленого результатом волевиявлення української нації 1 грудня 1991 року.
            Україна — унітарна держава. Вона складається з 24 областей, однієї автономної республіки Крим і двох міст з особливим статусом: Київ, столиця та найбільше місто, і Севастополь. Україна є президентсько-парламентською республікою з окремою законодавчою, виконавчою та судовою гілками влади. Найвищим органом державної влади є Верховна рада України, а главою держави — Президент України.
            За останнім переписом населення 2001 року в Україні проживало понад 48,4 млн осіб. З них 77,8 % становили українці, 17,3 % — росіяни і 4,9 % — представники інших національностей. Частка міського населення складала 32,5 млн осіб (67,2 %). Кількість жінок (53,7 %) переважала над кількістю чоловіків (46,3 %). Офіційною мовою в Україні є українська. В результаті багатовікового зросійщення[7] у східних і південних областях поширена російська мова. Більшість населення належить до християн східного обряду — православних і греко-католиків. Серед інших конфесій представлені римо-католицизм, протестантизм, іслам.
            Україна — промислово-аграрна країна. Вона є одним з провідних експортерів деяких видів сільськогосподарської продукції і продовольства, зокрема, соняшникової олії. Народно-господарський комплекс країни включає такі види промисловості як важке машинобудування, чорна та кольорова металургія, суднобудування, автомобілебудування, авіабудування, виробництво техніки, обладнання для електростанцій, нафтогазової та хімічної промисловості. Україна є потужним виробником та експортером електроенергії. Налагоджено виробництво ракетоносіїв, супутників та обладнання для дослідження космосу. Україна є значним виробником зброї — танків, військово-транспортних літаків, зенітно-ракетних комплексів, оптичного обладнання.
            Україна є одним із членів-засновників Організації Об'єднаних Націй[8], а також членом понад сорока міжнародних організацій."
        );
        $manager->persist($continent);
        $manager->persist($countr);


        $countr = new Country();
        $countr->setName("Франція");
        $countr->setContinent($continent);
        $countr->setCapital("Париж");
        $countr->setPresident("Франсуа Олланд");
        $countr->setPopulation(65073482);
        $countr->setSquare(551695);
        $countr->setNationalFlag("4");
        $countr->setDescription(
            "Франція, офіційна назва Французька Республіка (фр. La France, République Française) —
            держава на заході Європи, республіка, що межує на північному сході з Бельгією,
            Люксембургом і Німеччиною, на сході з Німеччиною, Швейцарією й Італією, південному-заході з
            Іспанією й Андоррою, на півдні омивається Середземним морем, на заході — Атлантичним океаном.
            Площа (разом з Корсикою) — 543 965 км². Столиця і найбільше місто — Париж.
            Окрім метрополії, Франції належать численні заморські території — Гваделупа, Сен-Бартельмі,
            Сен-Мартен, Французька Гвіана, Мартиніка, Майотта, Реюньйон, Сен-П'єр і Мікелон, Південні й
            Антарктичні території, Нова Каледонія, Французька Полінезія, Волліс і Футуна.
            Протягом останніх п'ятисот років Франція була одною з провідних країн світу[1]
            з сильними культурними, економічними, військовими та політичними впливами на Європу та увесь світ.
            Протягом 17-18 століть Франція колонізувала великі території у Північній Америці та Південно-Східній Азії,
             протягом двох наступних століть стала другою найбільшою імперією у світі, завоювавши значні частини
              Північної, Західної та Центральної Африки, Південно-Східної Азії, а також багато Карибських
              і Тихоокеанських островів."
        );
        $manager->persist($continent);
        $manager->persist($countr);

        $manager->flush();

    }
}