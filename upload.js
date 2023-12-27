document.addEventListener("DOMContentLoaded",() => {
    const btn = document.querySelector("#upload_btn")

    btn.addEventListener("click", (event) => {
        event.preventDefault()
        const f = document.upload_form
        if (f.photo.value === '') {
            alert('파일을 업로드 해주세요')
            return false
        }
        f.submit()
    })
})