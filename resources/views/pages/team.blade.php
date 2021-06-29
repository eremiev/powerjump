@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>За нас > Експертиза Екип</h2>
            </div>
        </div>

        <div class="bs-component">
            <div class="jumbotron">
                <p class="list-group-item-text"><b>Предназначение</b></p>
                <p class="list-group-item-text">Ние, НПО “Power Jump”, съществуваме, за да улесним достъпа на нашите приятели до атрактивни развлекателни продукти и услуги.</p>
                <p class="list-group-item-text"><b>Съвкупност от ценности</b></p>
                <h4 class="list-group-item-heading">Почтеност</h4>
                <p class="list-group-item-text">Ние изискваме от себе си и от другите спазването на най-високи етични стандарти и по този начин нашите продукти и процеси ще бъдат с максимално високо качество.</p>
                <h4 class="list-group-item-heading">Новаторство</h4>
                <p class="list-group-item-text">Новаторството е ключът към щастието и поддържането на растежа и доходността ни.</p>
                <h4 class="list-group-item-heading">Уважение</h4>
                <p class="list-group-item-text">Ние осъзнаваме, че хората са крайъгълният камък за успеха на association “Power Jump” , за това ценим различията си като източник на сила и се гордеем с отколешно уважение и достойно отношение към хората.</p>
                <h4 class="list-group-item-heading">Насоченост към клиента</h4>
                <p class="list-group-item-text">Ние сме дълбоко отдадени на желанието да удовлетворим потребностите на нашите клиенти и сме неизменно съсредоточени върху удовлетворението на клиента.</p>
                <h4 class="list-group-item-heading">Екипен дух</h4>
                <p class="list-group-item-text">Знаем,че за да бъдем преуспяваща организация, трябва да работим заедно, често надхвърляйки границите на организацията и държавите, за да отговорим на променящите се потребности на клиентите.</p>

                <p><i>NGO “Power Jump" Аssociation 4 Entertainment Movements Art & Extreme</i></p>
            </div>
        </div>

        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" height="200px;" src="{{ asset('images/miro.jpg')}}" alt="...">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Мирослав Тодоров</h4>
                <p>Ръководител , цялостно управление, координация на проекти. Мирослав има богат опит в използването на улично и цирково изкуство, екстремни спортове, игровизации и социокултурна анимация при решаването на социални предизвикателства и работа с маргинализирани групи. Той използва тези методологии при работа с младежи в неравностойно положение от етнически малцинства, от ЦНСТ и други институции, както и при работа с незрящи и адаптиране на нестандартни спортове за тях. Той има дълги години опит в участие и развитие на проекти за градско и улично изкуство, с международен опит в цирковото изкуство в пътуващи циркове и статични паркове като цирк Американо, Movieland Park Caneva, Aqualandia lido di jesolo Italy и други; местна експертиза чрез създаването и развитието на Варненски младежки фестивал ФЪНСИТИ (2010 – 2015) и развитие на серия проекти за улични изкуства чрез екстремни спортове в проектите на "Пауър Джъмп".</p>
            </div>
        </div>

        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" height="200px;" src="https://avatars.githubusercontent.com/u/13522112?v=4" alt="...">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Емил Еремиев</h4>
                <p>Доброволец в управлението и организацията на проекти. Емил е завършил специалност "Информатика и компютърни науки" в Икономически университет - Варна и се занимава с изгражване и поддържане на уеб страниците на клуб "Пауър Джъмп". Той е активен член от съзадането на огранизацията и успешно допринася за развитието на клуба.</p>
            </div>
        </div>



        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" height="200px;" src="{{ asset('images/v.jpg')}}" alt="...">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Ванеса Вулова</h4>
                <p>My name is Vanesa Vulova and I am 21 years old. I became part of NGO Power Jump back in 2011 when I was only 11. Since then I have been a part of numerous initiatives and events as a volunteer. I am a 3rd year Sports Studies student at the University of Stirling in Scotland.  The subjects I study include Sports Policy, Psychology of Physical Activity and Health, History of Sport, Sports Marketing and Research Methods. The Psychology of Exercise in particular touches upon physical interventions for different populations. It has given me insight in the physical activity guidelines and I am familiar with intervention design and the benefits of physical activity.</br>
                    I am an active person who enjoys all kinds of sports. I have been a swimmer for 3 years and I am currently part of a volleyball club. I have experience with volleyball and have a beginner level license for coaching football. I am looking to gain practical experience through actively managing different projects related to physical activity. </p>
            </div>
        </div>
    </div>

@endsection

