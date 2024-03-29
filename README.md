# ecosystem
Pet project, for creating "Ecosystem" by specific assignment

Экосистема

Представьте, что мы моделируем некую экосистему. Все действие происходит на поле размером NxN. Положение каждого объекта системы задается набором из двух целочисленных координат. Каждый объект реализует возможность позиционирования его в указанную точку.

Экосистема состоит из животных и растений. Все животные делятся на хищников и травоядных, причем среди всех хищников выделяются крупные хищники.

Каждое животное характеризуется названием (строка) и силой (целое число). При создании животного можно указывать либо название и силу, либо только название (сила назначается случайным образом). Создать просто животное нельзя – это либо хищник, либо травоядное. Животное также имеет возможность съесть другой объект игры, если оказывается на одной клетке с ним. При этом накладываются следующие ограничения:

сила травоядного не превосходит 100, сила хищника – от 100 до 200, сила крупного хищника – от 200 до 300;
крупные хищники могут есть хищников и травоядных;
хищники могут есть травоядных и тех хищников, которые слабее них;
травоядные могут есть только растения;
при встрече двух крупных хищников ситуация неопределенна (подумайте, как должна реагировать программа в этом случае).

При съедении животного оно перестает существовать в экосистеме. При съедении растения оно также перестает существовать, но появляется новое растение в случайном месте. Растение характеризуется только названием, которое необходимо указать при создании.

Еще одна сущность системы – наблюдатели. Наблюдатель имеет порядковый номер, при попадании в одну клетку с животным или растением наблюдатель должен описать этот объект. В описание должны попадать: номер наблюдателя, параметры объекта и дата и время наблюдения. При встрече с растением наблюдатель забирает его с собой, что эквивалентно съедению.

Программа должна запускаться из командной строки, ей передается два аргумента: размерность поля (целое число) и длительность наблюдения (целое число). При запуске создается некоторое количество объектов системы с различными характеристиками, они случайным образом разбрасываются по полю. На каждом шаге выполнения все животные перемещаются на соседнюю клетку (на какую именно – определяется случайным образом), а наблюдатели – на произвольную клетку (пересечение границ поля не допускается). После этого выполняются описанные выше взаимодействия. Каждое взаимодействие объектов должно отражаться в консоли (или лог-файле – по желанию), с указанием типов и названий объектов, типа взаимодействия и даты и времени события. Длительность наблюдения уменьшается на единицу.

Выполнение завершается, если длительность наблюдения стала равной нулю, или если съедены все травоядные животные.

Дополнительные задания (выполняются по желанию)

Растение может быть ядовитым, в этом случае животное его не ест. Также, растение имеет питательность (целое число), при съедении растения сила животного увеличивается на величину питательности растения. Сила хищника увеличивается на величину силы съеденного животного. При этом заданные пределы силы не могут быть превышены.

Диапазоны сил разных типов животных могут пересекаться. Если по правилам животное А может съесть животное В, но сила А меньше силы В, то животное В остается в системе, его сила уменьшается на величину силы А.

Для наблюдателя реализовать «прозрачные» границы поля – при попытке зайти на клетку за границами поля наблюдатель появляется с другой стороны.

Критерии приёмки:
Экосистему можно запустить, указав начальные параметры системы
Начальные параметры должны валидироваться 
Приложение выводит состояние поля на каждом шаге в консоль и выводит логи событий
