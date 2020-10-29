class App {

    constructor() {

        this.data = {
            server: {
                url: 'http://localhost'
            },
            divs: { 
                menu: $('#menu'),
                listFigureMenu: $('#listFigureMenu'),
                addFigureMenu: $('#addFigureMenu'),
                circleMenu: $('#circleMenu'),
                triangleMenu: $('#triangleMenu'),
                parallelogramMenu: $('#parallelogramMenu'), 
                figureMenu: $('.figureMenu')
            },
            buttons: {
                showAddFigure: $('#showAddFigure'),
                showListFigure: $('#showListFigure'),
                addFigure: $('#addFigure'),
                returnMenu: $('.returnMenu')
            },
            tables: {
                figuresTable: $('#figuresTable')
            },
            selects: {
                chooseFigure: $('#chooseFigure')
            }
        }
        this.server = new Server({ data: this.data });
        this.UI = new UI({ data: this.data });

        // Слушатель кнопки "Add figure menu"
        this.data.buttons.showAddFigure.on('click', () => {
            this.data.divs.menu.hide();
            this.data.divs.addFigureMenu.show();
        });
        // Слушатель кнопки "Add figure"
        this.data.buttons.addFigure.on('click', () => {
            let body = {
                points: []
            };
            const type = this.data.selects.chooseFigure.val();
            if (type) {
                const params = $('.' + type + 'Params');
                for (let i = 0; i < params.length; i++) {
                    if (params[i].name == 'point') {
                        body.points.push({
                            x: parseInt(params[i].value),
                            y: parseInt(params[i + 1].value)
                        });
                        i++;
                    } else {
                        body[params[i].name] = parseInt(params[i].value);
                    }
                }
                this.server.send({ model: 'add', action: type, method: 'POST', body: JSON.stringify(body) });
            }
        });
        // Слушать выпадающего списка
        this.data.selects.chooseFigure.on('change', () => {
            const type = this.data.selects.chooseFigure.val();
            this.data.divs.figureMenu.hide();
            $('#' + type + 'Menu').show();
        });
        // Cлушатель кнопки "Figure table"
        this.data.buttons.showListFigure.on('click', async () => {
            this.data.divs.menu.hide();
            this.data.divs.listFigureMenu.show();
            let result = await this.server.send({ model: 'figures', action: 'show', method: 'GET' });
            this.UI.createFiguresTable(result);
        });
        // Слушатель кнопки "Menu"
        this.data.buttons.returnMenu.on('click', () => {
            this.data.divs.menu.show();
            this.data.divs.addFigureMenu.hide();
            this.data.divs.listFigureMenu.hide();
        });

    }

}