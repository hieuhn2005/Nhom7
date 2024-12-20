<div class="body-lienhe">
            <div class="lienhe-header">Liên hệ</div>
            <div class="lienhe-info">
                <div class="info-left">
                    <p>
                        <h2 style="color: gray"> CÔNG TY CỔ PHẦN H - GROUP </h2><br />
                        <b>Địa chỉ:</b> 196 di trach, phường 3, Quận 5, Hà Nội<br /><br />
                        <b>Telephone:</b> 028 3835 4409<br /><br />
                        <b>Hotline:</b> 097777777 - CSKH: 028 9996 777<br /><br />
                        <b>Website:</b> <a href="https://github.com/hieuhn2005/Nhom7">Github</a> <br /><br />
                        <b>E-mail:</b> DoAn@gmail.com<br /><br />
                        <b>Mã số thuế:</b> 01 02 03 04 05<br /><br />
                        <b>Tài khoản ngân hàng :</b><br /><br />
                        <b>Số TK:</b> 060008086888 <br /><br />
                        <b>Tại Ngân hàng:</b> MB bank <br /><br /><br /><br />
                        <b>Quý khách có thể gửi liên hệ tới chúng tôi bằng cách hoàn tất biểu mẫu dưới đây. Chúng tôi
                            sẽ trả lời thư của quý khách, xin vui lòng khai báo đầy đủ. Hân hạnh phục vụ và chân thành
                            cảm ơn sự quan tâm, đóng góp ý kiến đến GRENNY.</b>
                    </p>
                </div>
                <div class="info-right">
                    <iframe width="100%" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d658.2611524513106!2d105.72167497743347!3d21.04519045434645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345442e7ca9cf7%3A0x8b198f58f3370c07!2zMTkyIMSQLiBEaSBUcuG6oWNoLCBEaSBUcuG6oWNoLCBIb8OgaSDEkOG7qWMsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1706597277975!5m2!1svi!2s" width="580" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Embed
                            Google Map
                        </a>
                    </iframe>
                    <br />
                </div>
            </div>
            <div class="lienhe-info">

                <div class="guithongtin">
                    <p style="font-size: 22px; color: gray">Gửi thông tin liên lạc cho chúng tôi: </p>
                    <hr />
                    <form name="formlh" onsubmit="return nguoidung()">
                        <table cellspacing="10px">
                            <tr>
                                <td>Họ và tên</td>
                                <td><input type="text" name="ht" size="40" maxlength="40" placeholder="Họ tên"
                                        autocomplete="off" required></td>
                            </tr>
                            <tr>
                                <td>Điện thoại liên hệ</td>
                                <td><input type="text" name="sdt" size="40" maxlength="11" minlength="10" placeholder="Điện thoại"
                                        required></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ Email</td>
                                <td><input type="email" name="em" size="40" placeholder="Email" autocomplete="off"
                                        required></td>
                            </tr>
                            <tr>
                                <td>Tiêu đề</td>
                                <td><input type="text" name="tde" size="40" maxlength="100" placeholder="Tiêu đề"
                                        required>
                            </tr>
                            <tr>
                                <td>Nội dung</td>
                                <td><textarea name="nd" rows="5" cols="44" maxlength="500" wrap="physical"
                                        placeholder="Nội dung liên hệ" required></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button type="submit">Gửi thông tin liên hệ</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="thongtinnhom">
                    <p style="font-size: 22px; color: gray">Thông tin thành viên nhóm: </p>
                    <hr />
                    <table>
                        <tr>
                            <th>Họ tên</th>
                            <th>MSSV</th>
                            <th>Giới tính</th>
                            <th>Lớp</th>
                            <th>Tỉ lệ công việc</th>
                        </tr>
                        <script>
                            var thongtin = [
                                ["Trần Văn Hoàng", "3117410091", "Nam", "DCT1175", "%"],
                                ["Đàm Thế Hào", "3117410065", "Nam", "DCT1175", "%"],
                                ["Huỳnh Trung Hiển", "3117410072", "Nam", "DCT1173", "%"],
                                ["Hoàng Hiệp", "3117410074", "Nam", "DCT1175", "%"]
                            ]
                            for (var i = 0; i < thongtin.length; i++) {
                                document.write(
                                    `
                                    <tr>
                                        <td>` +
                                    thongtin[i][0] + `</td>
                                        <td>` +
                                    thongtin[i][1] + `</td>
                                        <td>` +
                                    thongtin[i][2] + `</td>
                                        <td>` +
                                    thongtin[i][3] + `</td>
                                        <td>` +
                                    thongtin[i][4] +
                                    `</td>
                                    </tr>
                                `
                                )
                            }
                        </script>
                    </table>
                </div>

            </div>
        </div>