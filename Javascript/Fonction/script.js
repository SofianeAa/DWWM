function tablemultiplication(nombre) {
    table=""
    stringnombre=nombre.toString()
    for (i=1;i<11;i++)
        {
        istring=i.toString()
        resultatstring=i*nombre.toString()
        table=table+(istring)+(" x ")+(stringnombre)+(" = ")+(resultatstring)+("\n");
        }
        alert(table)
    return table
    }

tablemultiplication(5)

