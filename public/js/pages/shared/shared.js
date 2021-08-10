import K from '../../plugins/K.js';

const SS = {
    alert(message, type = 'normal') {
        try {
            $.notify({
                icon: `fal ${type == 'error' ? 'fa-exclamation-circle' : 'fa-bell-on'}`,
                message: message
            }, {
                type: 'primary',
                timer: 4000,
                placement: {
                    from: 'top',
                    align: 'right'
                }
            });
        } catch (e) {
            console.log('Notify library is missing, please make sure you have the notifications library added.');
        }
    },

    toggleHelp(e) {
        e.preventDefault();
        const name = $(this).attr('toggle');
        $(`div[toggle="${name}"]`).toggleClass('d-none');
    },

    nFormatter(num, digits) {
        const lookup = [
            { value: 1, symbol: "" },
            { value: 1e3, symbol: "k" },
            { value: 1e6, symbol: "M" },
            { value: 1e9, symbol: "G" },
            { value: 1e12, symbol: "T" },
            { value: 1e15, symbol: "P" },
            { value: 1e18, symbol: "E" }
        ];
        const rx = /\.0+$|(\.[0-9]*[1-9])0+$/;
        let item = lookup.slice().reverse().find(function(i) {
            return num >= i.value;
        });
        return item ? (num / item.value).toFixed(digits).replace(rx, "$1") + item.symbol : "0";
    },

    getPageCookie: page => K.JSON.parse(K.cookie.get(page)) || {},
    setPageCookie: function(page, obj) {
        const cookie = this.getPageCookie(page);
        K.cookie.set(page, K.JSON.stringify(K.extend(true, {}, cookie, obj)));
    }
}

export default SS;


