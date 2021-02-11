require('./vendor/prismjs');
Prism.manual = true;

highlightCode();
wrapHeadingsInAnchors();
setupNavCurrentLinkHandling();
replaceBlockquotesWithCalloutsInDocs();

const scrollToTopButton = document.getElementById('js-top');
const scrollFunc = () => {
    let scroll = window.scrollY;

    if (scroll > 0) {
        scrollToTopButton.className = "";
    } else {
        scrollToTopButton.className = "hidden";
    }
};

window.addEventListener("scroll", scrollFunc);

const scrollToTop = () => {
    const dist = document.documentElement.scrollTop || document.body.scrollTop;

    if (dist > 0) {
        window.requestAnimationFrame(scrollToTop);
        window.scrollTo(0, dist - dist / 10);
    }
};

scrollToTopButton.onclick = function(e) {
    e.preventDefault();
    scrollToTop();
}

function highlightCode() {
    [...document.querySelectorAll('pre code')].forEach(el => {
        Prism.highlightElement(el);
    });
}

function wrapHeadingsInAnchors() {
    [...document.querySelector('.docs_main').querySelectorAll('a[name]')].forEach(anchor => {
        const heading = anchor.parentNode.nextElementSibling;
        if (heading.id == 'the-at-error-directive') {
            console.log(heading, heading.childNodes);
        }
        anchor.href = `#${heading.id}`;
        anchor.removeAttribute('name');
        [...heading.childNodes].forEach(node => anchor.appendChild(node));
        heading.appendChild(anchor);
    });
}

function setupNavCurrentLinkHandling() {
    // Can return two, one for mobile nav and one for desktop nav
    [...document.querySelectorAll('.docs_sidebar ul')].forEach(nav => {
        const pathLength = window.location.pathname.split('/').length;
        const current = nav.querySelector('li a[href="' + (pathLength === 3 ? window.location.pathname+"/installation" : window.location.pathname) + '"]');

        if (current) {
            current.parentNode.parentNode.parentNode.classList.add('sub--on');
            current.parentNode.classList.add('active');
        }
    });

    [...document.querySelectorAll('.docs_sidebar h2')].forEach(el => {
        el.addEventListener('click', (e) => {
            e.preventDefault();

            const active = el.parentNode.classList.contains('sub--on');

            [...document.querySelectorAll('.docs_sidebar ul li')].forEach(el => el.classList.remove('sub--on'));

            if(! active) {
                el.parentNode.classList.add('sub--on');
            }
        });
    });
}

function replaceBlockquotesWithCalloutsInDocs() {
    [...document.querySelectorAll('.docs_main blockquote p')].forEach(el => {
        var str = el.outerHTML;
        var match = str.match(/\{(.*?)\}/);
        var img, color;

        if (match) {
            var type = match[1] || false;
        }

        if (type) {
            switch (type) {
                case "note":
                    img = '/aldrumo/aldrumo-com/img/exclamation-mark.svg';
                    color = 'exclaim';
                    break;
                case "tip":
                    img = '/aldrumo/aldrumo-com/img/idea.svg';
                    color = 'tip';
                    break;
                case "laracasts":
                case "video":
                    img = '/aldrumo/aldrumo-com/img/play-button.svg';
                    color = 'video';
                    break;
            }

            const wrapper = document.createElement('div');
            wrapper.classList = 'callout-wrapper callout';

            const imageWrapper = document.createElement('div');
            imageWrapper.classList = `image-wrapper ${color}`;
            const image = document.createElement('img');
            image.src = img;
            image.classList = `callout-icon`;
            imageWrapper.appendChild(image);
            wrapper.appendChild(imageWrapper);

            el.parentNode.insertBefore(wrapper, el);

            el.innerHTML = str.replace(/\{(.*?)\}/, '');
            el.classList = 'callout-para';
            wrapper.appendChild(el);
        }
    });
}
