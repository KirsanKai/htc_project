class UI {

    constructor(options) {
        this.data = options.data;

        this.divs = this.data.divs;
        this.buttons = this.data.buttons;
        this.tables = this.data.tables;
    }

    // Создать таблицу с фигурами
    createFiguresTable(figures) {
        if (figures) {       
            const table = this.tables.figuresTable;
            $('.figureRow').remove();
            for (let type in figures) {
                for (let i = 0; i < figures[type].length; i++) {
                    const row = $('<tr/>');
                    row.addClass('figureRow');
                    let cell = $('<td/>');
                    cell.html(this.ucFirst(type));
                    row.append(cell);
                    for (let key in figures[type][i]) {
                        if (key == 'id' || key == 'area') {
                            cell = $('<td/>');
                            cell.html(figures[type][i][key]);
                            row.append(cell);
                        }
                    }
                    table.append(row);
                }
            }
        }
    }

    // Первую букву строки прописной
    ucFirst(string) {
        return string[0].toUpperCase() + string.substring(1);
    }

}