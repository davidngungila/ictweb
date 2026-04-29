@extends('layouts.app')

@section('title', 'Blog - Jezdan Technology')

@section('content')
<!-- HERO -->
<section class="hero" style="background: linear-gradient(135deg, var(--navy) 0%, var(--navy-light) 100%); padding: 120px 0 80px;">
  <div class="container">
    <div style="text-align: center; max-width: 800px; margin: 0 auto;">
      <h1 style="font-family: var(--font-display); font-size: 3rem; font-weight: 700; color: white; margin-bottom: 20px;">
        Our <span style="color: var(--accent-bright);">Blog</span>
      </h1>
      <p style="font-size: 1.2rem; color: rgba(255,255,255,0.9); line-height: 1.8;">
        Insights, tutorials, and news about technology, digital transformation, and ICT solutions in Tanzania and East Africa.
      </p>
    </div>
  </div>
</section>

<!-- BLOG GRID -->
<section class="services" style="background: var(--off-white); padding: 80px 0;">
  <div class="container">
    <div class="section-header" style="text-align: center; max-width: 700px; margin: 0 auto 60px;">
      <div class="section-label"><i class="fas fa-newspaper"></i> Latest Articles</div>
      <h2 class="section-title">Stay Updated with <span>Tech Insights</span></h2>
      <p class="section-sub">Expert articles on web development, cybersecurity, networking, and digital transformation for Tanzanian businesses.</p>
    </div>
    
    <div class="services-grid">
      <!-- Blog Post 1 -->
      <div class="service-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/programming-background-with-person-working-with-codes-computer_f8umdv.jpg" alt="Web Development Trends" style="width: 100%; height: 200px; object-fit: cover;" />
        <div style="padding: 24px; flex: 1; display: flex; flex-direction: column;">
          <div style="margin-bottom: 12px;">
            <span style="background: rgba(26,111,196,0.1); color: var(--accent); padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">Web Development</span>
          </div>
          <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 12px;">Top Web Development Trends for 2025 in Tanzania</h3>
          <p style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 16px; flex: 1;">Discover the latest web technologies and frameworks that are transforming how Tanzanian businesses build their online presence.</p>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-top: auto;">
            <span style="font-size: 0.8rem; color: #999;">April 28, 2025</span>
            <a href="#" style="color: var(--accent); font-weight: 600; text-decoration: none;">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Blog Post 2 -->
      <div class="service-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600081/criminal-hacking-system-unsuccessfully_jjxzdq.jpg" alt="Cybersecurity Tips" style="width: 100%; height: 200px; object-fit: cover;" />
        <div style="padding: 24px; flex: 1; display: flex; flex-direction: column;">
          <div style="margin-bottom: 12px;">
            <span style="background: rgba(220,38,38,0.1); color: #dc2626; padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">Cybersecurity</span>
          </div>
          <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 12px;">Protecting Your Business from Cyber Threats</h3>
          <p style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 16px; flex: 1;">Essential cybersecurity measures every Tanzanian business should implement to protect their digital assets.</p>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-top: auto;">
            <span style="font-size: 0.8rem; color: #999;">April 25, 2025</span>
            <a href="#" style="color: var(--accent); font-weight: 600; text-decoration: none;">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Blog Post 3 -->
      <div class="service-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600083/network-switch-with-cables_btxlxw.jpg" alt="Network Installation" style="width: 100%; height: 200px; object-fit: cover;" />
        <div style="padding: 24px; flex: 1; display: flex; flex-direction: column;">
          <div style="margin-bottom: 12px;">
            <span style="background: rgba(16,185,129,0.1); color: #10b981; padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">Networking</span>
          </div>
          <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 12px;">Building Reliable Networks for Hotels & Lodges</h3>
          <p style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 16px; flex: 1;">Best practices for network infrastructure in Tanzania's hospitality industry to ensure guest satisfaction.</p>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-top: auto;">
            <span style="font-size: 0.8rem; color: #999;">April 20, 2025</span>
            <a href="#" style="color: var(--accent); font-weight: 600; text-decoration: none;">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Blog Post 4 -->
      <div class="service-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600084/i-m-hungry-hands-man-looking-food-delivery-app-his-smartphone-ordering-dinner-online_igrjev.jpg" alt="Mobile Apps" style="width: 100%; height: 200px; object-fit: cover;" />
        <div style="padding: 24px; flex: 1; display: flex; flex-direction: column;">
          <div style="margin-bottom: 12px;">
            <span style="background: rgba(139,92,246,0.1); color: #8b5cf6; padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">Mobile Apps</span>
          </div>
          <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 12px;">Why Your Business Needs a Mobile App in 2025</h3>
          <p style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 16px; flex: 1;">The benefits of mobile applications for Tanzanian businesses and how to get started with app development.</p>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-top: auto;">
            <span style="font-size: 0.8rem; color: #999;">April 15, 2025</span>
            <a href="#" style="color: var(--accent); font-weight: 600; text-decoration: none;">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Blog Post 5 -->
      <div class="service-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600082/modern-data-center-providing-cloud-services-enabling-businesses-access-computing-resources-storage-demand-internet-server-room-infrastructure-3d-render-animation_lljtml.jpg" alt="Cloud Services" style="width: 100%; height: 200px; object-fit: cover;" />
        <div style="padding: 24px; flex: 1; display: flex; flex-direction: column;">
          <div style="margin-bottom: 12px;">
            <span style="background: rgba(59,130,246,0.1); color: #3b82f6; padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">Cloud Services</span>
          </div>
          <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 12px;">Cloud Computing: The Future for Tanzanian SMEs</h3>
          <p style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 16px; flex: 1;">How cloud services can help small and medium enterprises in Tanzania reduce costs and improve efficiency.</p>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-top: auto;">
            <span style="font-size: 0.8rem; color: #999;">April 10, 2025</span>
            <a href="#" style="color: var(--accent); font-weight: 600; text-decoration: none;">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Blog Post 6 -->
      <div class="service-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
        <img src="https://res.cloudinary.com/dtxdrmjlk/image/upload/v1774600078/admin-data-center-typing-notebook-keyboard-using-automation-tools_lsc29m.jpg" alt="IT Support" style="width: 100%; height: 200px; object-fit: cover;" />
        <div style="padding: 24px; flex: 1; display: flex; flex-direction: column;">
          <div style="margin-bottom: 12px;">
            <span style="background: rgba(245,158,11,0.1); color: #f59e0b; padding: 4px 12px; border-radius: 50px; font-size: 0.75rem; font-weight: 600;">IT Support</span>
          </div>
          <h3 style="font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 12px;">The Importance of Proactive IT Support</h3>
          <p style="font-size: 0.9rem; color: var(--text-mid); line-height: 1.6; margin-bottom: 16px; flex: 1;">Why proactive IT maintenance is better than reactive fixes for businesses in Tanzania.</p>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-top: auto;">
            <span style="font-size: 0.8rem; color: #999;">April 5, 2025</span>
            <a href="#" style="color: var(--accent); font-weight: 600; text-decoration: none;">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Load More Button -->
    <div style="text-align: center; margin-top: 50px;">
      <button style="background: var(--navy); color: white; border: none; padding: 15px 40px; border-radius: 50px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s;">
        Load More Articles <i class="fas fa-chevron-down" style="margin-left: 8px;"></i>
      </button>
    </div>
  </div>
</section>

<!-- NEWSLETTER -->
<section class="tour-packages" style="background: linear-gradient(135deg, var(--accent) 0%, var(--accent-bright) 100%); padding: 80px 0;">
  <div class="container">
    <div style="text-align: center; max-width: 600px; margin: 0 auto;">
      <h2 style="font-family: var(--font-display); font-size: 2rem; font-weight: 700; color: white; margin-bottom: 16px;">Subscribe to Our Newsletter</h2>
      <p style="color: rgba(255,255,255,0.9); font-size: 1.1rem; line-height: 1.6; margin-bottom: 30px;">
        Get the latest tech insights, tips, and updates delivered straight to your inbox.
      </p>
      <form style="display: flex; gap: 10px; max-width: 500px; margin: 0 auto;">
        <input type="email" placeholder="Enter your email" style="flex: 1; padding: 15px 20px; border: none; border-radius: 50px; font-size: 1rem;" />
        <button type="submit" style="background: var(--navy); color: white; border: none; padding: 15px 30px; border-radius: 50px; font-size: 1rem; font-weight: 600; cursor: pointer;">
          Subscribe
        </button>
      </form>
    </div>
  </div>
</section>
@endsection
