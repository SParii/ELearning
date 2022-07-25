const quiz =[
{
	q:'Which of the following should be done in order to convert a continuous-time signal to a discrete-time signal?',
	options:['Sampling','Differentiating','Integrating','None of the mentioned'],
	answer:0
},
{
	q:' The process of converting discrete-time continuous valued signal into discrete-time discrete valued (digital) signal is known as ____________',
	options:['Sampling','Quantization','coding','None of the mentioned'],
	answer:1
},
{
	q:'The difference between the unquantized x(n) and quantized xq(n) is known as ___________',
	options:['Quantization coefficient','Quantization ratio','Quantization factor','Quantization error'],
	answer:3
},
{
	q:' Which of the following is a digital-to-analog conversion process?',
	options:['Staircase approximation',' Linear interpolation','Quadratic interpolation',' All of the mentioned'],
	answer:3
},
{
	q:'The relation between analog frequency ‘F’ and digital frequency ‘f’ is?',
	options:["F=f*T(where T is sampling period)",'f=F*T','No relation','None of the mentioned'],
	answer:1
},
{
	q:"What is output signal when a signal x(t)=cos(2*pi*40*t) is sampled with a sampling frequency of 20Hz?",
	options:['cos(pi*n)',"cos(2*pi*n)",'cos(4*pi*n)',' cos(8*pi*n)'],
	answer:2
},
{
	q:" If ‘F’ is the frequency of the analog signal, then what is the minimum sampling rate required to avoid aliasing?",
	options:["F","2F","3F","4F"],
	answer:0
},
{
	q:"What is the nyquist rate of the signal x(t)=3cos(50*pi*t)+10sin(300*pi*t)-cos(100*pi*t)? ",
	options:["50Hz","100Hz","200Hz","300Hz"],
	answer:3
},
{
	q:"What is the discrete-time signal obtained after sampling the analog signal x(t)=cos(2000*pi*t)+sin(5000*pi*t) at a sampling rate of 5000 samples/sec?",
	options:["cos(2.5*pi*n)+sin(pi*n)","cos(0.4*pi*n)+sin(pi*n)","cos(2000*pi*n)+sin(5000*pi*n)","none of the mentioned"],
	answer:1
},
{
	q:"If the sampling rate Fs satisfies the sampling theorem, then the relation between quantization errors of analog signal(eq(t)) and discrete-time signal(eq(n)) is?",
	options:["eq(t)=eq(n)","eq(t)<eq(n)","eq(t)>eq(n)","not related"],
	answer:0
},
{
	q:" The quality of output signal from A/D converter is measured in terms of ___________",
	options:["Quantization error","Quantization to signal noise ratio","Signal to quantization noise ratio","Conversion constant"],
	answer:2
},
{
	q:"Which bit coder is required to code a signal with 16 levels?",
	options:["8bit","4bit","2bit","1bit"],
	answer:2
}
]
