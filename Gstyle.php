 <style>
* {
    box-sizing: border-box;
}
.header1 {
    text-align: center;
    padding: 32px;
}
.row {
    display: flex;
    flex-wrap: wrap;
    padding: 0 4px;
}
.column {

    flex: 50%;
    padding: 0 4px;
}
.column img {
    margin-top: 8px;
    vertical-align: middle;
}

@media screen and (max-width: 800px) {
    .column {
        flex: 50%;
        max-width: 50%;
        padding: 0 4px;
    }
}

@media screen and (max-width: 600px) {
    .column {
        flex: 100%;
        max-width: 100%;
        padding: 0 4px;
    }
}
.btn {
    border: none;
    outline: none;
    padding: 10px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
    font-size: 18px;
}

.btn:hover {
    background-color: #ddd;
}

.btn.active {
    background-color: #666;
    color: white;
}

.panel-title {
    font-size: 45px;
    text-align: center;
}
.panel-title a{
    color: #6e073b;
}

    </style>