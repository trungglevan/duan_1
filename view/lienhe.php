<style>
    #list-products {
        display: flex;
        list-style: none;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
    }

    #list-products .item {
        width: 290px;
        height: 374px;
        background: #d0cfcf;
        border-radius: 10px;
        margin-bottom: 50px;
    }

    /* Style inputs with type="text", select elements and textareas */
    input[type=text],
    select,
    textarea {
        width: 100%;
        /* Full width */
        padding: 12px;
        /* Some padding */
        border: 1px solid #ccc;
        /* Gray border */
        border-radius: 4px;
        /* Rounded borders */
        box-sizing: border-box;
        /* Make sure that padding and width stays in place */
        margin-top: 6px;
        /* Add a top margin */
        margin-bottom: 16px;
        /* Bottom margin */
        resize: vertical
            /* Allow the user to vertically resize the textarea (not horizontally) */
    }

    /* Style the submit button with a specific background color etc */
    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    /* When moving the mouse over the submit button, add a darker green color */
    input[type=submit]:hover {
        background-color: #45a049;
    }

    /* Add a background color and some padding around the form */
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>


<div id="wp-products">
    <h2> ĐỊA CHỈ </h2>
    <ul id="list-products">
        <div class="item">
            <h2 class="title">
                <span>MIỀN BẮC</span>
            </h2>
            <div class="inner">
                <p>
                    <strong>
                        <i class=""></i>
                        Hà Nội
                    </strong>
                    : 23D – A10, KĐT Nam Trung Yên, Yên Hòa, Cầu Giấy, Hà Nội
                </p>
                <p>
                    <strong>
                        <i class=""></i>
                        Điện Thoại
                    </strong>
                    :086.758.9999
                </p>
                <p>
                    <strong>
                        <i class=""></i>
                        Email
                    </strong>
                    :info@vinatechgroup.vn
                </p>
            </div>
        </div>
        <div class="item">
            <h2 class="title">
                <span>MIỀN TRUNG</span>
            </h2>
            <div class="inner">
                <p>
                    <strong>
                        <i class=""></i>
                        Đà Nẵng
                    </strong>
                    : 219 – 223 Đường Phạm Hùng, Hòa Xuân, Cẩm Lệ, Đà Nẵng
                </p>
                <p>
                    <strong>
                        <i class=""></i>
                        Điện Thoại
                    </strong>
                    :086.758.9999
                </p>
                <p>
                    <strong>
                        <i class=""></i>
                        Email
                    </strong>
                    :info@vinatechgroup.vn
                </p>
            </div>
        </div>
        <div class="item">
            <h2 class="title">
                <span>MIỀN NAM</span>
            </h2>
            <div class="inner">
                <p>
                    <strong>
                        <i class=""></i>
                        HCM
                    </strong>
                    :Lô C2-7, Đường N7, KCN Tân Phú Trung, huyện Củ Chi, TP.HCM
                </p>
                <p>
                    <strong>
                        <i class=""></i>
                        Điện Thoại
                    </strong>
                    :086.758.9999
                </p>
                <p>
                    <strong>
                        <i class=""></i>
                        Email
                    </strong>
                    :info@vinatechgroup.vn
                </p>
            </div>
        </div>
        <div class="container">
            <form action="action_page.php">

                <label for="fname"> Tên</label>
                <input type="text" id="fname" name="firstname" placeholder="Nhập tên">

                <label for="lname">Họ</label>
                <input type="text" id="lname" name="lastname" placeholder="Họ Của Bạn">

                <label for="country">Quốc Gia</label>
                <select id="country" name="country">
                    <option value="vietnam">Việt Nam</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select>

                <label for="subject">Nội Dung</label>
                <textarea id="subject" name="subject" placeholder="Viết Vài Thứ" style="height:200px"></textarea>

                <input type="submit" value="Gửi">

            </form>
        </div>
        <div>
            <h1>Vị trí Cụ Thể Nhất</h1>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.930595234134!2d108.17345677491693!3d16.069090984610416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3...!1svi!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br>
</div>