export default class homeSlider {

    /**
     * @param   {Element} element
     */
    constructor(element) {
        /**
         * @type {Element}
         * @private
         */
        this._container = element;

        /**
         * @type {NodeListOf<Element>}
         */
        this._slide = this._container.querySelectorAll('.slide');

        /**
         * @type {number}
         */
        this.index = 0;

        /**
         * @type {Element | any}
         * @private
         */
        this._controls = this._container.querySelector('.controls');

        /**
         * @type {Element | any}
         * @private
         */
        this._prev = this._container.querySelector('.control.previous');

        /**
         * @type {Element | any}
         * @private
         */
        this._next = this._container.querySelector('.control.next');
    }

    init() {

        this._slide[this.index].classList.add('active');

        if ( this._slide.length > 1 && this._controls ) {
            this._controls.classList.add('active');
        }

        const self = this;

        if ( this._next ) {
            this._next.addEventListener('click', () => {
                self.nextSlide();
            });
        }

        if ( this._prev ) {
            this._prev.addEventListener('click', () => {
                self.prevSlide();
            });
        }

        // setTimeout(() => {
        //     centerTitle.addClass('hide');
        // });

        setInterval(function() {
            self.nextSlide();
        }, 5000);
    }

    nextSlide() {

        this._slide[this.index].classList.remove('active');
        this.index = this.index + 1;

        if ( this.index >= this._slide.length ) {
            this.index = 0;
        }

        this._slide[this.index].classList.add('active');
    }

    prevSlide() {

        this._slide[this.index].classList.remove('active');
        this.index = this.index - 1;

        if ( this.index < 0 ) {
            this.index = this._slide.length - 1;
        }

        this._slide[this.index].classList.add('active');
    }
}
