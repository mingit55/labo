class Alert {
    static white = "#ffffff";
    static info = "#31E773";
    static error = "#EE4949";

    static create(message){
        let elem = document.createElement("div");
        elem.classList.add("alert-message")
        elem.innerHTML = message;
        return elem;
    }

<<<<<<< HEAD
    static on(message, type = Alert.info, callBack = null){
        if(document.querySelector(".alert-message")) return;
        
=======
    static on(message, type = Alert.info, callBack = null, auto_color_change = false){
>>>>>>> 7481e3f... Tab 기능 추가
        let elem = Alert.create(message);
        elem.style.backgroundColor = type;
        if(auto_color_change) elem.classList.add( Color.checkBrightness(type) );
        
        document.body.append(elem);
        $(elem).animate({top: "80px", opacity: "0"}, 2000, () => {
            elem.remove();
            callBack && callBack();
        });
    }

    static confirm(title, message, callBack = null, applyText = "예", cancelText = "아니오"){
        if(document.querySelector(".alert-message")) return;

        let elem = Alert.create();
        elem.classList.add("confirm");
        Style.setStyle(elem, "backgroundColor", Alert.error);

        elem.innerHTML =`<div class="w-100 pt-3 pl-3 pr-3">
                            <h3>${title}</h3>
                            <small class='in-block mt-1'>
                                ${message}
                            </small>
                        </div>
                        <div class="w-100 mt-2 flex">
                            <button class="btn-apply">${applyText}</button>
                            <button class="btn-cancel">${cancelText}</button>
                        </div>`;
        elem.querySelector(".btn-apply").addEventListener("click", function(){
            callBack && callBack();
            this.parentElement.parentElement.remove();
        });

        elem.querySelector(".btn-cancel").addEventListener("click", function(){
            this.parentElement.parentElement.remove();
        });

        document.body.append(elem);
        
    }

    static prompt(message, callBack = null, applyText = "확인", cancelText = "취소"){
        console.log("prompt");
        if(document.querySelector(".alert-message")) return;

        let elem = Alert.create();
        elem.classList.add("prompt");

        elem.innerHTML =`<div class="alert-header">
                            <div class="icon">
                                <svg class="gUZ B9u U9O kVc" height="24" width="24" viewBox="0 0 24 24" aria-hidden="true" aria-label="" role="img"><path d="M13.386 6.018l4.596 4.596L7.097 21.499 1 22.999l1.501-6.096L13.386 6.018zm8.662-4.066a3.248 3.248 0 0 1 0 4.596L19.75 8.848 15.154 4.25l2.298-2.299a3.248 3.248 0 0 1 4.596 0z"></path></svg>
                            </div>
                        </div>
                        <div class="contents w-100 pt-3 pl-3 pr-3">
                            <h3>${message}</h3>
                            <input type="text" id="prompt-output" placeholder="이곳에 내용을 입력하세요!">
                        </div>
                        <div class="btn-group w-100 mt-2 flex">
                            <button class="btn-apply">${applyText}</button>
                            <button class="btn-cancel">${cancelText}</button>
                        </div>`;

        let applyHandler = () => {
            let data = elem.querySelector("#prompt-output").value;
            elem.remove();
            callBack && callBack(data);
        };
        elem.querySelector(".btn-apply").addEventListener("click", applyHandler);
        elem.querySelector("#prompt-output").addEventListener("keydown", e => e.keyCode === 13 && applyHandler());

        elem.querySelector(".btn-cancel").addEventListener("click", function(){
            this.parentElement.parentElement.remove();
        });

        document.body.append(elem);
    }
}

window.addEventListener("load", () => {
    get_coo
});