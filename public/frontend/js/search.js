$.typeahead({
    input: '.js-typeahead-beer_v1',
    minLength: 1,
    maxItem: 15,
    order: "asc",
    hint: true,
    group: {
        template: "{{group}} beers!"
    },
    maxItemPerGroup: 5,
    backdrop: {
        "background-color": "#fff"
    },
    href: "/result-for/{{group}}/{{display}}/",
    dropdownFilter: "All",
    emptyTemplate: 'No result for "{{query}}"',
    source: {
        "Product": {
            ajax: {
                url: "/json/product",
                path: "data.all.product"
            }
        },
        "Category": {
            ajax: {
                url: "/json/product",
                path: "data.all.category"
            }
        }
    },
    callback: {
        onClickAfter: function (node, a, item, event) {
 
            event.preventDefault;
            
            /*window.open(item.href);*/
 
        }
    },
    debug: true
});