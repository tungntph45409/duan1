<div class="edit">
  <h3>Account Details</h3>
  <?php
    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
      extract($_SESSION['user']);
    }
  ?>
  <form action="index.php?act=account" method="post">
    <div class="inputBox1">
      <input type="email" required="required" name="email" value="<?=$email ?>">
      <span>Email</span>
    </div>
    <div class="inputBox1">
      <input type="password" required="required" name="pass" value="<?=$pass ?>">
      <span>Password</span>
    </div>
    <div class="inputBox1">
      <input type="text" required="required" name="tel" value="<?=$tel ?>">
      <span>Phone Number</span>
    </div>
   
    <div class="inputBox1">
      <input type="date" required="required" name="birthday" value="<?=$birthday ?>">
      <span>Date of Birth</span>
    </div>
    <div class="inputBox1">
      <p>Location</p>
      <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm" name="city">
        <option value="">You select city </option>
      </select>
    </div>
    <div class="inputBox1">
      <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm" name="district">
      <option value="">You select district </option>
      </select>
    </div>
    <div class="inputBox1">
      <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm" name="ward">
      <option value="">You select ward </option>

      </select>
    </div>
    <div class="inputBox1">
      <input type="text" required="required" name="address" id="address" value="<?=$address ?>">
      <span>Address</span>
    </div>
    <div class="inputBox1">
      <hr>
      <p>Delete Account </p>
      <hr>
    </div>
    <div class="inputSubmit1">
      <p class="thongbao"></p>
      <input type="hidden" name="id" value="<?=$id ?>">
      <input type="hidden" name="user" value="<?=$user ?>">
      <input type="submit" value="SAVE" name="capnhat">
    </div>
  </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
  var citySelect = document.getElementById("city");
  var districtSelect = document.getElementById("district");
  var wardSelect = document.getElementById("ward");
  var addressInput = document.getElementById("address");

  var Parameter = {
    url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
    method: "GET",
    responseType: "application/json",
  };

  var promise = axios(Parameter);
  promise.then(function (result) {
    renderCity(result.data);
  });

  function renderCity(data) {
    for (const city of data) {
      citySelect.options[citySelect.options.length] = new Option(city.Name, city.Id);
    }

    citySelect.onchange = function () {
      districtSelect.length = 1;
      wardSelect.length = 1;

      if (this.value !== "") {
        const selectedCity = data.find((c) => c.Id === this.value);

        for (const district of selectedCity.Districts) {
          districtSelect.options[districtSelect.options.length] = new Option(district.Name, district.Id);
        }
        updateAddress();
      }
    };

    districtSelect.onchange = function () {
      wardSelect.length = 1;
      const selectedCity = data.find((c) => c.Id === citySelect.value);

      if (this.value !== "") {
        const selectedDistrict = selectedCity.Districts.find((d) => d.Id === this.value);

        for (const ward of selectedDistrict.Wards) {
          wardSelect.options[wardSelect.options.length] = new Option(ward.Name, ward.Id);
        }
        updateAddress();
      }
    };

    wardSelect.onchange = function () {
      updateAddress();
    };
  }

  function updateAddress() {
    const selectedCityText = citySelect.options[citySelect.selectedIndex].text;
    const selectedDistrictText = districtSelect.options[districtSelect.selectedIndex].text;
    const selectedWardText = wardSelect.options[wardSelect.selectedIndex].text;

    addressInput.value = `${selectedWardText}, ${selectedDistrictText}, ${selectedCityText}`;
  }
</script>
