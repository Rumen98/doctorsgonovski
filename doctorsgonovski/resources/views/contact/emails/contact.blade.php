<div style="font-family: 'Arial', sans-serif; padding: 40px; background-color: #f5f5f5; color: #333;">

    <div style="max-width: 700px; margin: 0 auto; background-color: #ffffff; padding: 40px 40px 60px 40px; border-radius: 12px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">

        <h2 style="border-bottom: 2px solid #ff7f00; padding-bottom: 20px; margin-bottom: 30px; color: #ff7f00; font-size: 24px;">Пациентова информация <i class="fas fa-notes-medical" style="color: #ff7f00;"></i></h2>

        <h3 style="font-size: 20px; color: #2c3e50; margin-bottom: 20px;"><i class="fas fa-user" style="color: #ff7f00;"></i> Име: <span style="color: #ff7f00; font-weight: normal;">{{ $name }}</span></h3>

        <p style="margin-bottom: 10px;"><i class="fas fa-envelope" style="color: #ff7f00;"></i> <strong style="color: #2c3e50; font-size: 18px;">Email:</strong> <span style="color: #7f8c8d; font-size: 18px;">{{ $emailAddress }}</span></p>

        <p style="margin-bottom: 20px;"><i class="fas fa-stethoscope" style="color: #ff7f00;"></i> <strong style="color: #2c3e50; font-size: 18px;">Причина:</strong> <span style="color: #7f8c8d; font-size: 18px;">{{ $subject }}</span></p>

        <p style="margin-bottom: 10px; font-size: 18px;"><i class="fas fa-comment-alt" style="color: #ff7f00;"></i> <strong style="color: #2c3e50;">Съобщение:</strong></p>

        <p style="background-color: #fff3e5; padding: 20px; border-radius: 8px; font-size: 18px; border: 1px solid #ff7f00;">{{ $messageBody }}</p>

    </div>
</div>
