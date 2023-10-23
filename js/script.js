'use strict';

// Динамический адаптив

function DynamicAdapt(type) {
    this.type = type;
}
DynamicAdapt.prototype.init = function () {
    const _this = this;
    // массив объектов
    this.оbjects = [];
    this.daClassname = '_dynamic_adapt_';
    // массив DOM-элементов
    this.nodes = document.querySelectorAll('[data-da]');
    // наполнение оbjects объктами
    for (let i = 0; i < this.nodes.length; i++) {
        const node = this.nodes[i];
        const data = node.dataset.da.trim();
        const dataArray = data.split(',');
        const оbject = {};
        оbject.element = node;
        оbject.parent = node.parentNode;
        оbject.destination = document.querySelector(dataArray[0].trim());
        оbject.breakpoint = dataArray[1] ? dataArray[1].trim() : '767';
        оbject.place = dataArray[2] ? dataArray[2].trim() : 'last';
        оbject.index = this.indexInParent(оbject.parent, оbject.element);
        this.оbjects.push(оbject);
    }
    this.arraySort(this.оbjects);
    // массив уникальных медиа-запросов
    this.mediaQueries = Array.prototype.map.call(
        this.оbjects,
        function (item) {
            return '(' + this.type + '-width: ' + item.breakpoint + 'px),' + item.breakpoint;
        },
        this,
    );
    this.mediaQueries = Array.prototype.filter.call(
        this.mediaQueries,
        function (item, index, self) {
            return Array.prototype.indexOf.call(self, item) === index;
        },
    );
    // навешивание слушателя на медиа-запрос
    // и вызов обработчика при первом запуске
    for (let i = 0; i < this.mediaQueries.length; i++) {
        const media = this.mediaQueries[i];
        const mediaSplit = String.prototype.split.call(media, ',');
        const matchMedia = window.matchMedia(mediaSplit[0]);
        const mediaBreakpoint = mediaSplit[1];
        // массив объектов с подходящим брейкпоинтом
        const оbjectsFilter = Array.prototype.filter.call(this.оbjects, function (item) {
            return item.breakpoint === mediaBreakpoint;
        });
        matchMedia.addListener(function () {
            _this.mediaHandler(matchMedia, оbjectsFilter);
        });
        this.mediaHandler(matchMedia, оbjectsFilter);
    }
};
DynamicAdapt.prototype.mediaHandler = function (matchMedia, оbjects) {
    if (matchMedia.matches) {
        for (let i = 0; i < оbjects.length; i++) {
            const оbject = оbjects[i];
            оbject.index = this.indexInParent(оbject.parent, оbject.element);
            this.moveTo(оbject.place, оbject.element, оbject.destination);
        }
    } else {
        //for (let i = 0; i < оbjects.length; i++) {
        for (let i = оbjects.length - 1; i >= 0; i--) {
            const оbject = оbjects[i];
            if (оbject.element.classList.contains(this.daClassname)) {
                this.moveBack(оbject.parent, оbject.element, оbject.index);
            }
        }
    }
};
// Функция перемещения
DynamicAdapt.prototype.moveTo = function (place, element, destination) {
    element.classList.add(this.daClassname);
    if (place === 'last' || place >= destination.children.length) {
        destination.insertAdjacentElement('beforeend', element);
        return;
    }
    if (place === 'first') {
        destination.insertAdjacentElement('afterbegin', element);
        return;
    }
    destination.children[place].insertAdjacentElement('beforebegin', element);
};
// Функция возврата
DynamicAdapt.prototype.moveBack = function (parent, element, index) {
    element.classList.remove(this.daClassname);
    if (parent.children[index] !== undefined) {
        parent.children[index].insertAdjacentElement('beforebegin', element);
    } else {
        parent.insertAdjacentElement('beforeend', element);
    }
};
// Функция получения индекса внутри родителя
DynamicAdapt.prototype.indexInParent = function (parent, element) {
    const array = Array.prototype.slice.call(parent.children);
    return Array.prototype.indexOf.call(array, element);
};
// Функция сортировки массива по breakpoint и place
// по возрастанию для this.type = min
// по убыванию для this.type = max
DynamicAdapt.prototype.arraySort = function (arr) {
    if (this.type === 'min') {
        Array.prototype.sort.call(arr, function (a, b) {
            if (a.breakpoint === b.breakpoint) {
                if (a.place === b.place) {
                    return 0;
                }

                if (a.place === 'first' || b.place === 'last') {
                    return -1;
                }

                if (a.place === 'last' || b.place === 'first') {
                    return 1;
                }

                return a.place - b.place;
            }

            return a.breakpoint - b.breakpoint;
        });
    } else {
        Array.prototype.sort.call(arr, function (a, b) {
            if (a.breakpoint === b.breakpoint) {
                if (a.place === b.place) {
                    return 0;
                }

                if (a.place === 'first' || b.place === 'last') {
                    return 1;
                }

                if (a.place === 'last' || b.place === 'first') {
                    return -1;
                }

                return b.place - a.place;
            }

            return b.breakpoint - a.breakpoint;
        });
        return;
    }
};
const da = new DynamicAdapt('max');
da.init();

const isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (
            isMobile.Android() ||
            isMobile.BlackBerry() ||
            isMobile.iOS() ||
            isMobile.Opera() ||
            isMobile.Windows()
        );
    },
};

// Меню бургер
const iconMenu = document.querySelector('.menu-burger__icon');
const menuBody = document.querySelector('.header__menu-burger');
if (iconMenu) {
    iconMenu.addEventListener('click', function (e) {
        document.body.classList.toggle('_lock');
        iconMenu.classList.toggle('_active');
        menuBody.classList.toggle('_active');
    });
}

// Спойлеры Lang
document.addEventListener('DOMContentLoaded', function () {
    const langHeaderItems = document.querySelectorAll('.lang-header__item');

    langHeaderItems.forEach((item) => {
        const spoller = item.querySelector('.lang-header__spoller');
        const langHeaderList = item.querySelector('.lang-header__list');

        spoller.addEventListener('click', function (event) {
            langHeaderItems.forEach((otherItem) => {
                if (otherItem !== item) {
                    otherItem.querySelector('.lang-header__spoller').classList.remove('active');
                    otherItem.querySelector('.lang-header__list').style.display = 'none';
                }
            });

            this.classList.toggle('active');
            langHeaderList.style.display =
                langHeaderList.style.display === 'none' ? 'block' : 'none';
        });

        const countryItems = langHeaderList.querySelectorAll('.lang-header__country');

        countryItems.forEach((countryItem) => {
            countryItem.addEventListener('click', function () {
                const selectedCountry = spoller.querySelector('.lang-header__country');
                const selectedCountryText = selectedCountry.querySelector('span').textContent;

                if (selectedCountryText !== this.textContent) {
                    spoller.querySelector('.lang-header__country span').textContent =
                        this.textContent;
                    this.textContent = selectedCountryText;
                }

                langHeaderList.style.display = 'none';
                spoller.classList.remove('active');
            });
        });

        langHeaderList.style.display = 'none';
    });
});

// Show more

const itemHeaders = document.querySelectorAll('.item-transporation__header');
const itemInfos = document.querySelectorAll('.item-transporation__about');
const itemChevrons = document.querySelectorAll('.item-transporation__chevron');

itemHeaders.forEach((itemHeader, index) => {
    let infoVisible = false;

    itemHeader.addEventListener('click', () => {
        if (window.innerWidth <= 778) {
            infoVisible = !infoVisible;

            if (infoVisible) {
                itemInfos[index].style.display = 'block';
                itemChevrons[index].style.transform = 'rotate(90deg)';
            } else {
                itemInfos[index].style.display = 'none';
                itemChevrons[index].style.transform = 'rotate(0deg)';
            }
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const questionElements = document.querySelectorAll('.question-block__question');

    questionElements.forEach(function (questionElement) {
        questionElement.addEventListener('click', function (event) {
            const spollersElement = document.querySelector('.question-block__spollers');

            if (spollersElement.classList.contains('one')) {
                questionElements.forEach(function (otherQuestionElement) {
                    if (otherQuestionElement !== questionElement) {
                        otherQuestionElement.classList.remove('active');
                        if (otherQuestionElement.nextElementSibling) {
                            otherQuestionElement.nextElementSibling.style.display = 'none';
                        }
                    }
                });
            }

            questionElement.classList.toggle('active');
            if (questionElement.nextElementSibling) {
                questionElement.nextElementSibling.style.display = questionElement.classList.contains('active') ? 'block' : 'none';
            }
        });
    });
});

// Calculation
const tabs = document.querySelectorAll('.calculation__item');
const categoriesLists = document.querySelectorAll('.calculation__item-categories');

tabs[0].classList.add('is-active');

categoriesLists.forEach((categoryList, index) => {
    const buttons = categoryList.querySelectorAll('.calculation__item-category-btn');

    buttons.forEach((button) => {
        button.addEventListener('click', function () {
            const tabNumber = this.dataset.tab;

            tabs.forEach((tab) => {
                tab.classList.remove('is-active');
            });

            tabs[tabNumber - 1].classList.add('is-active');
        });
    });
});

// Selectors
document.addEventListener('DOMContentLoaded', function () {
    const selectors = document.querySelectorAll('.custom-selector');
    let currentlyOpenSelector = null;

    document.addEventListener('click', function (event) {
        if (!event.target.closest('.custom-selector')) {
            if (currentlyOpenSelector) {
                hideOptions(currentlyOpenSelector);
                currentlyOpenSelector = null;
            }
        }
    });

    selectors.forEach((selector) => {
        const options = selector.querySelector('.options');
        const selectorLabel = selector.querySelector('.selector-label');
        const chevronIcon = selector.querySelector('.chevron-icon');

        selector.addEventListener('click', () => {
            if (currentlyOpenSelector && currentlyOpenSelector !== selector) {
                hideOptions(currentlyOpenSelector);
            }
            toggleOptions(options, chevronIcon);
            currentlyOpenSelector = selector;
        });

        const optionItems = options.querySelectorAll('.option');
        optionItems.forEach((option) => {
            option.addEventListener('click', (event) => {
                const selectedText = event.target.textContent;
                selectorLabel.textContent = selectedText;
            });
        });
    });

    function toggleOptions(options, chevronIcon) {
        options.classList.toggle('show-options');
        chevronIcon.classList.toggle('active');
    }

    function hideOptions(selector) {
        const options = selector.querySelector('.options');
        const chevronIcon = selector.querySelector('.chevron-icon');
        options.classList.remove('show-options');
        chevronIcon.classList.remove('active');
    }
});

// Hero Adaptive
function init() {
    const heroBody = document.querySelector('.hero__body');
    const heroContent = document.querySelector('.hero__content');
    const screenWidthThreshold = 768;
    const scrollThreshold = 300;
    let eventListenersAdded = false;

    function updatePaddingTop() {
        const contentHeight = heroContent.scrollHeight;
        const newPaddingTop = contentHeight >= scrollThreshold ? contentHeight : 240;
        heroBody.style.paddingTop = `${Math.min(newPaddingTop, 370)}px`;
    }

    function removeEventListeners() {
        window.removeEventListener('resize', handleResize);
        window.removeEventListener('scroll', handleScroll);
        eventListenersAdded = false;
    }

    function resetPaddingTop() {
        heroBody.style.paddingTop = '';
        removeEventListeners();
    }

    function handleResize() {
        if (window.innerWidth > screenWidthThreshold) {
            resetPaddingTop();
        } else {
            adjustPaddingTop();
        }
    }

    function handleScroll() {
        if (window.innerWidth <= screenWidthThreshold) {
            updatePaddingTop();
        }
    }

    function adjustPaddingTop() {
        const screenWidth = window.innerWidth;
        if (screenWidth <= screenWidthThreshold) {
            updatePaddingTop();
            if (!eventListenersAdded) {
                window.addEventListener('resize', handleResize);
                window.addEventListener('scroll', handleScroll);
                eventListenersAdded = true;
            }
        } else {
            resetPaddingTop();
        }
    }

    window.addEventListener('resize', handleResize);
    window.addEventListener('scroll', handleScroll);

    adjustPaddingTop();
}

window.addEventListener('load', init);


// Modal

const openModalBtns = document.querySelectorAll(".openModalBtn");
const modal = document.getElementById("modal");
const closeModalBtn = document.getElementById("closeModalBtn");
const backgroundOverlay = document.getElementById("backgroundOverlay");

openModalBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        modal.style.display = "flex";
        document.body.classList.add("blurred");
        backgroundOverlay.style.opacity = 1;
        backgroundOverlay.style.pointerEvents = "auto";
    });
});

function closeModal() {
    modal.style.display = "none";
    document.body.classList.remove("blurred");
    backgroundOverlay.style.opacity = 0;
    backgroundOverlay.style.pointerEvents = "none";
}

closeModalBtn.addEventListener("click", closeModal);

window.addEventListener("click", (event) => {
    if (event.target === modal) {
        closeModal();
    }
});

// Modal items
const modalItems = document.querySelectorAll('.modal__item');
const modalItemCategories = document.querySelectorAll('.modal__item-categories');

modalItems[0].classList.add('is-active');

modalItemCategories.forEach((categoryList, index) => {
    const buttons = categoryList.querySelectorAll('.modal__item-category-btn');

    buttons.forEach((button) => {
        button.addEventListener('click', function () {
            const tabNumber = this.dataset.tab;

            modalItems.forEach((modalItem) => {
                modalItem.classList.remove('is-active');
            });

            modalItems[tabNumber - 1].classList.add('is-active');
        });
    });
});
